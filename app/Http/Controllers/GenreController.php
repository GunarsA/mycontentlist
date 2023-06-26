<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Models\Genre;
use App\Models\User;

class GenreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $genres = Genre::all();

        return view('genre', compact('genres'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        Gate::allowIf(fn (User $user) => $user->is_admin);

        return view('genre_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Gate::allowIf(fn (User $user) => $user->is_admin);

        $genre = new Genre();
        $genre->genre = $request->genre;
        $genre->save();

        return redirect('genre');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $genre = Genre::findOrFail($id);

        return view('genre_show', compact('genre'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        Gate::allowIf(fn (User $user) => $user->is_admin);

        $genre = Genre::findOrFail($id);

        return view('genre_edit', compact('genre'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Gate::allowIf(fn (User $user) => $user->is_admin);

        $genre = Genre::findOrFail($id);
        $genre->genre = $request->genre;
        $genre->save();

        return redirect('genre');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Gate::allowIf(fn (User $user) => $user->is_admin);

        $genre = Genre::findOrFail($id)->delete();

        return redirect('genre');
    }
}
