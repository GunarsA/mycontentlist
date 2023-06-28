@extends('layout')
@section('content')
<div class="container mx-auto">
    <h1 class="text-2xl font-bold mb-4">{{ __('content.genres') }}</h1>
    <a href="{{ action([App\Http\Controllers\GenreController::class, 'create']) }}" class="inline-block px-4 py-2 mb-4 bg-blue-500 text-white rounded hover:bg-blue-600">{{ __('gen.newGenre') }}</a>
    <ul class="space-y-2">
        @foreach ($genres as $genre)
        <li class="flex items-center justify-between bg-white rounded-lg p-4 shadow-md">
            <a href="{{ route('genre.show', ['genre' => $genre->id]) }}" class="text-blue-500 hover:underline">{{ __('gen.'.strtolower($genre->genre)) }}</a>
            <form method="POST" action="{{ route('genre.destroy', $genre->id) }}" class="inline-block">
                @csrf
                @method('DELETE')
                <button type="submit" value="delete" class="text-red-500 hover:text-red-700">{{ __('gen.delete') }}</button>
            </form>
        </li>
        @endforeach
    </ul>
</div>

@endsection
