<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();

        return view('user', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = User::where('id', $id)->first();

        if (!$user) {
            return abort(404);
        }

        return view('user_show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::findOrFail($id);
        if (!$user) {
            return abort(404);
        }
        Gate::allowIf(fn (User $user) => $user->is_admin);

        $user->delete();

        Log::info('User [' . $user->name . ' (' . $user->id . ')] deleted by user [' . Auth::user()->name . ' (' . Auth::user()->id . ')]');

        return redirect('user');
    }

    /**
     * Change the mod status of the specified user.
     */
    public function changeModStatus(string $id)
    {
        $user = User::where('id', $id)->first();
        if (!$user) {
            return abort(404);
        }
        Gate::allowIf(fn (User $user) => $user->is_admin);

        $user->is_mod = !$user->is_mod;
        $user->save();

        Log::info('User [' . $user->name . ' (' . $user->id . ')] mod status changed to [' . ($user->is_mod ? 'true' : 'false') . '] by user [' . Auth::user()->name . ' (' . Auth::user()->id . ')]');

        return redirect('user');
    }
}
