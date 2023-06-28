@extends('layout')
@section('content')
{{ $studio->genre }}

    <h1>{{ $studio->name }}</h1>
    <a href={{ action([App\Http\Controllers\StudioController::class, 'edit'], ['studio' => $studio]) }}>Edit</a>

    <h3>Content</h3>
    <ul>
        @foreach ($studio->content as $content)
        <li><a href={{ action([App\Http\Controllers\ContentController::class, 'show'], ['content' => $content]) }}>{{ $content->title }}</a></li>
        @endforeach
    </ul>
@endsection
