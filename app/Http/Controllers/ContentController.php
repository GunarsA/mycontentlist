<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Storage;
use App\Models\Content;

class ContentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $content = Content::all();

        return view('content', compact('content'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (!Gate::allows('modify')) {
            abort(403);
        }

        $types = \App\Models\ContentType::all();
        $genres = \App\Models\Genre::all();
        $staff = \App\Models\Staff::all();
        $positions = \App\Models\PositionType::all();
        $studios = \App\Models\Studio::all();
        $characters = \App\Models\Character::all();

        Log::info('New content creation');

        return view('content_create', compact('types', 'genres', 'staff', 'characters', 'studios', 'positions'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if (!Gate::allows('modify')) {
            abort(403);
        }

        $validated = $request->validate(
            [
                'title' => 'required',
                'content_type' => 'exists:content_types,id|required',
                'episode_cnt' => 'gt:0|integer|required',
                'length' => 'integer|required',
                'year' => 'integer|required',
                'genre' => 'exists:genres,id',
                'studio' => 'exists:studios,id',
                'character' => 'exists:characters,id',
                'image' => 'image|mimes:jpeg,png,jpg,gif,svg',
            ]
        );

        $content = new Content();
        $content->title = $request->title;
        $content->content_type_id = $request->content_type;
        $content->episode_cnt = $request->episode_cnt;
        $content->length = $request->length;
        $content->year = $request->year;
        $content->save();

        $content->genres()->attach($request->genre);
        $content->studios()->attach($request->studio);
        $content->characters()->attach($request->character);

        $positions = \App\Models\PositionType::all();
        foreach ($positions as $position) {
            $content->staff()->attach($request[$position->position], ['position_type_id' => $position->id]);
        }

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('images', 'public');
            $content->image_path = $path;
            $content->save();
        }

        return redirect('/content');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $content = Content::findOrFail($id);

        return view('content_show', compact('content'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        if (!Gate::allows('modify')) {
            abort(403);
        }

        $content = Content::findOrFail($id);
        $types = \App\Models\ContentType::all();
        $genres = \App\Models\Genre::all();
        $staff = \App\Models\Staff::all();
        $positions = \App\Models\PositionType::all();
        $studios = \App\Models\Studio::all();
        $characters = \App\Models\Character::all();

        return view('content_edit', compact('content', 'types', 'genres', 'staff', 'characters', 'studios', 'positions'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        if (!Gate::allows('modify')) {
            abort(403);
        }

        $validated = $request->validate(
            [
                'title' => 'required',
                'content_type' => 'exists:content_types,id|required',
                'episode_cnt' => 'gt:0|integer|required',
                'length' => 'integer|required',
                'year' => 'integer|required',
                'genre' => 'exists:genres,id',
                'studio' => 'exists:studios,id',
                'character' => 'exists:characters,id',
                'image' => 'image|mimes:jpeg,png,jpg,gif,svg',
            ]
        );

        $content = Content::findOrFail($id);
        $content->title = $request->title;
        $content->content_type_id = $request->content_type;
        $content->episode_cnt = $request->episode_cnt;
        $content->length = $request->length;
        $content->year = $request->year;
        $content->save();

        $content->genres()->sync($request->genre);
        $content->studios()->sync($request->studio);
        $content->characters()->sync($request->character);

        $content->staff()->detach();
        $positions = \App\Models\PositionType::all();
        foreach ($positions as $position) {
            $content->staff()->attach($request[$position->position], ['position_type_id' => $position->id]);
        }

        if ($request->hasFile('image')) {
            if ($content->image_path) {
                Storage::disk('public')->delete($content->image_path);
            }
            $path = $request->file('image')->store('images', 'public');
            $content->image_path = $path;
            $content->save();
        }

        return redirect('/content');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        if (!Gate::allows('modify')) {
            abort(403);
        }

        $content = Content::findOrFail($id);
        Storage::disk('public')->delete($content->image_path);

        return redirect('/content');
    }
}
