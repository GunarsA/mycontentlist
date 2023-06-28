<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use App\Models\Studio;
use App\Models\User;

class StudioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $studios = Studio::all();
        
        return view('studio', compact('studios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        Gate::allowIf(fn (User $user) => $user->is_admin);

        return view('studio_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Gate::allowIf(fn (User $user) => $user->is_admin);

        $studio = new Studio();
        $studio->name = $request->name;
        $studio->save();

        Log::info('Studio [' . $studio->name . ' (' . $studio->id . ')] created by user [' . Auth::user()->name . ' (' . Auth::user()->id . ')]');

        return redirect('studio');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $studio = Studio::findOrFail($id);
        if (!Gate::allows('modify')) {
            abort(403);
        }

        return view('studio_show', compact('studio'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        Gate::allowIf(fn (User $user) => $user->is_admin);

        $studio = Studio::findOrFail($id);
        if (!Gate::allows('modify')) {
            abort(403);
        }

        return view('studio_edit', compact('studio'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Gate::allowIf(fn (User $user) => $user->is_admin);

        $studio = Studio::findOrFail($id);
        $studio->name = $request->name;
        $studio->save();

        Log::info('Studio [' . $studio->name . ' (' . $studio->id . ')] updated by user [' . Auth::user()->name . ' (' . Auth::user()->id . ')]');

        return redirect('studio');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Gate::allowIf(fn (User $user) => $user->is_admin);

        $studio = Studio::findOrFail($id);
        $studio->delete();

        Log::info('Studio [' . $studio->name . ' (' . $studio->id . ')] deleted by user [' . Auth::user()->name . ' (' . Auth::user()->id . ')]');
        
        return redirect('studio');
    }
}
