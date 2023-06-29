@extends('layout')
@section('content')
    <h1 class="text-3xl font-bold text-black">{{ __('content.characters') }}</h1>
    <a href="{{ route('character.create') }}" class="text-blue-500 hover:underline mt-4">{{ __('gen.newCharacter') }}</a>
    <ul class="mt-4">
        @foreach ($characters as $character)
            <li class="bg-white shadow-lg rounded-lg p-6 mb-4">
                <a href="{{ route('character.show', ['character' => $character->id]) }}"
                    class="text-blue-500 hover:underline">{{ $character->name }}</a>
                <form method="POST" action="{{ route('character.destroy', $character->id) }}" class="inline-block">
                    @csrf
                    @method('DELETE')
                    <button type="submit"
                        class="text-white bg-red-500 px-4 py-2 rounded-full ml-2 hover:bg-red-700">{{ __('gen.delete') }}</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
