@extends('layout')
@section('content')
    <h1>{{ $character->name }}</h1>
    <a href={{ action([App\Http\Controllers\CharacterController::class, 'edit'], ['character' => $character]) }}>Edit</a>

    <h3>Content</h3>
    <ul>
        @foreach ($character->content as $content)
        <li><a href={{ action([App\Http\Controllers\ContentController::class, 'show'], ['content' => $content]) }}>{{ $content->title }}</a></li>
        @endforeach
    </ul>
@endsection
