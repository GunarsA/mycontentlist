@extends('layout')
@section('content')
<h1 class="text-3xl font-bold text-black">{{$content->title}}</h1>
@if (Auth::check() && Auth::user()->can('modify'))
<a href={{ action([App\Http\Controllers\ContentController::class, 'edit'], ['content' => $content]) }} class="text-blue-500 hover:underline">{{ __('gen.edit') }}</a>
@endif
@if (Auth::check() && Auth::user()->can('modify'))
<form action={{ action([App\Http\Controllers\ContentController::class, 'destroy'], ['content' => $content]) }} method="POST" class="inline-block">
    @csrf
    @method('DELETE')
    <button type="submit" class="text-red-500 hover:text-red-700">{{ __('gen.delete') }}</button>
</form>
@endif
<h3 class="text-lg font-semibold text-black mt-6">{{ __('content.type') }}</h3>
<p class="mt-2">{{$content->type->type}}</p>
<h3 class="text-lg font-semibold text-black mt-6">{{ __('content.ep_cnt') }}</h3>
<p class="mt-2">{{$content->episode_cnt}}</p>
<h3 class="text-lg font-semibold text-black mt-6">{{ __('content.length') }}</h3>
<p class="mt-2">{{$content->length}}</p>
<h3 class="text-lg font-semibold text-black mt-6">{{ __('content.year') }}</h3>
<p class="mt-2">{{$content->year}}</p>
<h3 class="text-lg font-semibold text-black mt-6">{{ __('content.genres') }}</h3>
<ul class="mt-2">
    @foreach($content->genres as $genre)
    <li>{{$genre->genre}}</li>
    @endforeach
</ul>
<h3 class="text-lg font-semibold text-black mt-6">{{ __('gen.studios') }}</h3>
<ul class="mt-2">
    @foreach($content->studios as $studio)
    <li>{{$studio->name}}</li>
    @endforeach
</ul>
<h3 class="text-lg font-semibold text-black mt-6">Cast</h3>
<ul class="mt-2">
    @foreach($content->staff as $staff)
    <li>{{$staff->name}} ({{$staff->position}})</li>
    @endforeach
</ul>
<h3 class="text-lg font-semibold text-black mt-6">{{ __('content.characters') }}</h3>
<ul class="mt-2">
    @foreach($content->characters as $character)
    <li>{{$character->name}}</li>
    @endforeach
</ul>

@endsection
