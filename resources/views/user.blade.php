@extends('layout')
@section('content')
    <h1>Users</h1>
    <ul>
        @foreach ($users as $user)
        <li>
            <a href={{ action([App\Http\Controllers\UserController::class, 'show'], [$user->id]) }}>{{ $user->name }}</a>
        </li>
        @endforeach
    </ul>
@endsection
