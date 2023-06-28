@extends('layout')
@section('content')
    <div class="mx-auto max-w-screen">
        <h1 class="text-3xl font-bold mb-6">{{ __('layout.ratings') }}</h1>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            <span class="sr-only">{{ __('layout.ratings') }}</span>
                        </th>
                        <th scope="col" class="px-6 py-3">
                            {{ __('gen.user') }}
                        </th>
                        <th scope="col" class="px-6 py-3">
                            {{ __('gen.content') }}
                        </th>
                        <th scope="col" class="px-6 py-3">
                            {{ __('gen.rating') }}
                        </th>
                        <th scope="col" class="px-6 py-3">
                            {{ __('gen.progress') }}
                        </th>
                        <th scope="col" class="px-6 py-3">
                            {{ __('gen.is_favorite') }}
                        </th>
                        <th scope="col" class="px-6 py-3">
                            {{ __('gen.date_started') }}
                        </th>
                        <th scope="col" class="px-6 py-3">
                            {{ __('gen.date_finished') }}
                        </th>
                        <th scope="col" class="px-6 py-3">
                            {{ __('gen.review') }}
                        </th>
                        <th scope="col" class="px-6 py-3">
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($ratings as $rating)
                        <tr
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td class="w-32 p-4">
                                <img src={{url('storage/' . $rating->content->image_path)}} alt="content poster">
                            </td>
                            <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">
                                {{ $rating->user->name }}
                            </td>
                            <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">
                                {{ $rating->content->title }}
                            </td>
                            <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">
                                {{ $rating->rating }}
                            </td>
                            <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">
                                {{ $rating->progress }}
                            </td>
                            <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">
                                {{ $rating->is_favorite ? "✅" : "❌️" }}
                            </td>
                            <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">
                                {{ $rating->date_started }}
                            </td>
                            <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">
                                {{ $rating->date_finished }}
                            </td>
                            <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">
                                {{ $rating->review }}
                            </td>
                            <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">
                                <a href="{{ action([App\Http\Controllers\RatingController::class, 'show'], [$rating->id]) }}">{{ __('gen.show') }}</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
