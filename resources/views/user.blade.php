@extends('layout')
@section('content')
    <h1>Users</h1>
    <ul>
        @foreach ($users as $user)
        <li>
            <a href={{ action([App\Http\Controllers\UserController::class, 'show'], [$user->id]) }}>{{ $user->name }}</a>
            @if($user->is_admin)
                <span class="badge badge-primary">Admin</span>
            @elseif($user->is_mod)
                <span class="badge badge-secondary">Moderator</span>
            @endif
            <form action={{ action([App\Http\Controllers\UserController::class, 'changeModStatus'], [$user->id]) }} method="POST">
                @csrf
                <button type="submit" class="btn btn-primary">Change Mod Status</button>
            </form>
            <form action={{ action([App\Http\Controllers\UserController::class, 'destroy'], [$user->id]) }} method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </li>
        
        @endforeach
    </ul>
@endsection
