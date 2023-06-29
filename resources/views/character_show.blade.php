@extends('layout')
@section('content')
<h1 class="text-3xl font-bold text-black">{{ $character->name }}</h1>
<a href={{ action([App\Http\Controllers\CharacterController::class, 'edit'], ['character' => $character]) }} class="text-blue-500 hover:underline">Edit</a>

<h3 class="text-lg font-semibold text-black mt-6">Content</h3>
<ul class="mt-4">
    @foreach ($character->content as $content)
    <li><a href={{ action([App\Http\Controllers\ContentController::class, 'show'], ['content' => $content]) }} class="text-gray-700 hover:text-gray-900">{{ $content->title }}</a></li>
    @endforeach
</ul>

@endsection
