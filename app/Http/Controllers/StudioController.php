<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Studio;

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
        return view('studio_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $studio = new Studio();
        $studio->name = $request->name;
        $studio->save();
        return redirect('studio');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $studio = Studio::findOrFail($id);
        return view('studio_show', compact('studio'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $studio = Studio::findOrFail($id);
        return view('studio_edit', compact('studio'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $studio = Studio::findOrFail($id);
        $studio->name = $request->name;
        $studio->save();
        return redirect('studio');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $studio = Studio::findOrFail($id);
        $studio->delete();
        return redirect('studio');
    }
}
