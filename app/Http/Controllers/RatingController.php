<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Log;
use App\Models\Rating;

class RatingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ratings = Rating::all();

        return view('rating', compact('ratings'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($content_id)
    {
        $user = Auth::user();
        $content = \App\Models\Content::where('id', $content_id)->first();
        if (!$content) {
            return abort(404);
        }
        if (Rating::where('user_id', $user->id)->where('content_id', $content->id)->first()) {
            $rating = Rating::where('user_id', $user->id)->where('content_id', $content->id)->first();
            return view('rating_edit', compact('rating'));
        }

        return view('rating_create', compact('user', 'content'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rating = new Rating();
        $validated = $request->validate([
            'rating' => 'required|numeric|min:0|max:10',
            // 'date_started' => '',
            // 'date_finished' => '',
            // 'review' => '',
        ]);
        $rating->user_id = $request->user_id;
        $rating->content_id = $request->content_id;
        // $rating->rating = $request->rating;
        $rating->is_favorite = $request->is_favorite ? true : false;
        $rating->date_started = $request->date_started;
        $rating->date_finished = $request->date_finished;
        $rating->review = $request->review;
        $rating->fill($validated);
        $rating->save();

        Log::info('Rating [' . $rating->rating . ' (' . $rating->id . ')] for content [' . $rating->content->title . ' (' . $rating->content_id . ')] created by user [' . $rating->user->name . ' (' . $rating->user_id . ')]');

        return redirect('/rating');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $rating = Rating::where('id', $id)->first();

        if (!$rating) {
            return abort(404);
        }

        return view('rating_show', compact('rating'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

        $rating = Rating::where('id', $id)->first();
        if (!$rating) {
            return abort(404);
        }
        if (!Gate::allows('rate', $rating)) {
            abort(403);
        }

        return view('rating_edit', compact('rating'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $rating = Rating::where('id', $id)->first();
        if (!Gate::allows('rate', $rating)) {
            abort(403);
        }

        $validated = $request->validate([
            'rating' => 'required|numeric|min:0|max:10',
            // 'date_started' => '',
            // 'date_finished' => '',
            // 'review' => '',
        ]);
        $rating = Rating::where('id', $id)->first();
        $rating->user_id = $request->user_id;
        $rating->content_id = $request->content_id;
        // $rating->rating = $request->rating;
        $rating->is_favorite = $request->is_favorite ? true : false;
        $rating->date_started = $request->date_started;
        $rating->date_finished = $request->date_finished;
        $rating->review = $request->review;
        $rating->fill($validated);
        $rating->save();

        Log::info('Rating [' . $rating->rating . ' (' . $rating->id . ')] for content [' . $rating->content->title . ' (' . $rating->content_id . ')] updated by user [' . $rating->user->name . ' (' . $rating->user_id . ')]');

        return redirect('/rating');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $rating = Rating::findOrFail($id);
        if (!Gate::allows('rate', $rating)) {
            abort(403);
        }
        $rating->delete();

        Log::info('Rating [' . $rating->rating . ' (' . $rating->id . ')] for content [' . $rating->content->title . ' (' . $rating->content_id . ')] deleted by user [' . $rating->user->name . ' (' . $rating->user_id . ')]');

        return redirect('/rating');
    }
}
