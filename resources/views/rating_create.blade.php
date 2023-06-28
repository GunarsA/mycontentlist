@extends('layout')
@section('content')
<h1>{{ $content->title }}</h1>
    @if (count($errors) > 0)
    <div>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
<form method="POST" action={{ action([App\Http\Controllers\RatingController::class, 'store']) }}
class="max-w-md mx-auto bg-white shadow-md rounded-lg px-8 py-6">
    @csrf
    <input type="hidden" name="user_id" id="user_id" value="{{ $user->id }}">
    <input type="hidden" name="content_id" id="content_id" value="{{ $content->id }}">

    <div class="mb-4">
        <label for="rating" class="block font-medium text-gray-700">Rating</label>
        <input type="text" name="rating" id="rating" min="1" max="10"
            value="{{ old('rating') }}"
            class="border-gray-300 focus:border-blue-500 focus:ring-blue-500 block w-full rounded-md shadow-sm mt-1">
    </div>

    <div class="mb-4">
        <label for="progress" class="block font-medium text-gray-700">Progress</label>
        <input type="text" name="progress" id="progress"
            class="border-gray-300 focus:border-blue-500 focus:ring-blue-500 block w-full rounded-md shadow-sm mt-1">
    </div>

    <div class="mb-4 flex items-center">
        <input type="checkbox" name="is_favorite" id="is_favorite"
            class="rounded border-gray-300 text-blue-500 focus:border-blue-500 focus:ring-blue-500">
        <label for="is_favorite" class="ml-2 text-gray-700">Favorite</label>
    </div>

    <div class="mb-4">
        <label for="date_started" class="block font-medium text-gray-700">Date Started</label>
        <input type="date" name="date_started" id="date_started"
            class="border-gray-300 focus:border-blue-500 focus:ring-blue-500 block w-full rounded-md shadow-sm mt-1">
    </div>

    <div class="mb-4">
        <label for="date_finished" class="block font-medium text-gray-700">Date Finished</label>
        <input type="date" name="date_finished" id="date_finished" class="border-gray-300 focus:border-blue-500 focus:ring-blue-500 block w-full rounded-md shadow-sm mt-1">
    </div>

    <div class="mb-4">
        <label for="review" class="block font-medium text-gray-700">Review</label>
        <textarea name="review" id="review" cols="30" rows="10"
            class="border-gray-300 focus:border-blue-500 focus:ring-blue-500 block w-full rounded-md shadow-sm mt-1">
        </textarea>
    </div>

    <div class="flex justify-end">
        <input type="submit" value="Submit"
            class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
    </div>
</form>
@endsection
