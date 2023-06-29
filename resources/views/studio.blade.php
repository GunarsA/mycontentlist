@extends('layout')
@section('content')
<h1 class="text-3xl font-bold text-black">{{ __('gen.studios') }}</h1>
<a href="{{ route('studio.create') }}" class="text-blue-500 hover:underline mt-4">{{ __('gen.newStudio') }}</a>
<ul class="mt-4">
    @foreach ($studios as $studio)
    <li class="bg-white shadow-lg rounded-lg p-6 mb-4">
        <a href="{{ route('studio.show', ['studio' => $studio->id])}}" class="text-blue-500 hover:underline">{{ $studio->name }}</a>
        <form method="POST" action="{{ route('studio.destroy', $studio->id) }}" class="inline-block">
            @csrf
            @method('DELETE')
            <button type="submit" class="text-white bg-red-500 px-4 py-2 rounded-full ml-2 hover:bg-red-700">{{ __('gen.delete') }}</button>
        </form>
    </li>
    @endforeach
</ul>

@endsection
