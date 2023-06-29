@extends('layout')
@section('content')
<h1 class="text-3xl font-bold text-black">{{$rating->user->name}} - {{$rating->content->title}}</h1>

<p class="mt-4">
    <a href={{action([App\Http\Controllers\RatingController::class, 'edit'], [$rating->id])}} class="text-blue-500 hover:underline">Edit</a>
</p>
<p>
<form action={{action([App\Http\Controllers\RatingController::class, 'destroy'], [$rating->id])}} method="POST" class="inline-block">
    @csrf
    @method('DELETE')
    <button type="submit" class="text-red-500 hover:text-red-700">Delete</button>
</form>
</p>

<h3 class="text-lg font-semibold text-black mt-6">Rating</h3>
<p class="mt-2">{{$rating->rating}}</p>
<h3 class="text-lg font-semibold text-black mt-6">Progress</h3>
<p class="mt-2">{{$rating->progress}}</p>
<h3 class="text-lg font-semibold text-black mt-6">Is Favorite</h3>
<p class="mt-2">{{$rating->is_favorite}}</p>
<h3 class="text-lg font-semibold text-black mt-6">Date Started</h3>
<p class="mt-2">{{$rating->date_started}}</p>
<h3 class="text-lg font-semibold text-black mt-6">Date Finished</h3>
<p class="mt-2">{{$rating->date_finished}}</p>
<h3 class="text-lg font-semibold text-black mt-6">Review</h3>
<p class="mt-2">{{$rating->review}}</p>

@endsection
