@extends('layout')
@section('content')
    <h1>{{$content->title}}</h1>
    @if (Auth::check() && Auth::user()->can('modify'))
    <a href={{ action([App\Http\Controllers\ContentController::class, 'edit'], ['content' => $content]) }}>Edit</a>
    @endif
    @if (Auth::check() && Auth::user()->can('modify'))
    <form action={{ action([App\Http\Controllers\ContentController::class, 'destroy'], ['content' => $content]) }} method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
    @endif
    <h3>Content Type</h3>
    <p>{{ $content->type->type }}</p>
    <h3>Episode Count</h3>
    <p>{{ $content->episode_cnt }}</p>
    <h3>Length</h3>
    <p>{{ $content->length }}</p>
    <h3>Year</h3>
    <p>{{ $content->year }}</p>
    <h3>Genres</h3>
    <ul>
        @foreach($content->genres as $genre)
        <li>{{ $genre->genre }}</li>
        @endforeach
    </ul>
    <h3>Studios</h3>
    <ul>
        @foreach($content->studios as $studio)
        <li>{{ $studio->name }}</li>
        @endforeach
    </ul>
    <h3>Crew & Cast</h3>
    <ul>
        @foreach($content->staff as $staff)
        <li>{{ $staff->name }} ({{ $staff->position }})</li>
        @endforeach
    </ul>
    <h3>Characters</h3>
    <ul>
        @foreach($content->characters as $character)
        <li>{{ $character->name }}</li>
        @endforeach
    </ul>
@endsection
