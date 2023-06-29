@extends('layout')
@section('content')
{{ $studio->genre }}
<h1 class="text-3xl font-bold text-black">{{ $studio->name }}</h1>
<a href={{ action([App\Http\Controllers\StudioController::class, 'edit'], ['studio' => $studio]) }} class="text-blue-500 hover:underline">Edit</a>

<h3 class="text-lg font-semibold text-black mt-4">Content</h3>
<ul class="mt-2">
    @foreach ($studio->content as $content)
    <li class="flex items-center">
        <a href={{ action([App\Http\Controllers\ContentController::class, 'show'], ['content' => $content]) }} class="text-blue-500 hover:underline">{{ $content->title }}</a>
    </li>
    @endforeach
</ul>

@endsection
