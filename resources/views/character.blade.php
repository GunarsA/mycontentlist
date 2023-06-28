@extends('layout')
@section('content')
    <h1>Characters</h1>
    <a href="{{ route('character.create') }}">New Character</a>
    <ul>
        @foreach ($characters as $character)
        <li>
            <a href="{{ route('character.show', ['character' => $character->id])}}">{{ $character->name }}</a>
            <form method="POST" action="{{ route('character.destroy', $character->id) }}">
                @csrf
                @method('DELETE')

                <button type="submit" value="delete">Delete</button>
            </form>
        </li>
        @endforeach
    </ul>
@endsection
