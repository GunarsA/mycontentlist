@extends('layout')
@section('content')
    @if (Auth::check() && Auth::user()->can('modify'))
        <a href={{ action([App\Http\Controllers\ContentController::class, 'create']) }}>New Content</a>
    @endif
    <div class="mx-auto max-w-screen">
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            <span class="sr-only">Image</span>
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Title
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Type
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Episode Count
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Length
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Year
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Genres
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Crew & Cast
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Characters
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Studios
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($content as $content)
                        <tr
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td class="w-32 p-4">
                                <img src="{{ url('storage/' . $content->image_path) }}">
                            </td>
                            <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">
                                <a href={{ route('content.show', ['content' => $content->id]) }}>{{ $content->title }}</a>
                                <a
                                    href={{ action([App\Http\Controllers\RatingController::class, 'create'], ['content_id' => $content->id]) }}>
                                    (rate)
                                </a>
                            </td>
                            <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">
                                {{ $content->type->type }}
                            </td>
                            <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">
                                {{ $content->episode_cnt }}
                            </td>
                            <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">
                                {{ $content->length }}
                            </td>
                            <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">
                                {{ $content->year }}
                            </td>
                            <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">
                                @foreach ($content->genres as $genre)
                                    {{ $genre->genre }},
                                @endforeach
                            </td>
                            <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">
                                @foreach ($content->staff as $staff)
                                    {{ $staff->name }} ({{ $staff->position }}),
                                @endforeach
                            </td>
                            <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">
                                @foreach ($content->characters as $character)
                                    {{ $character->name }},
                                @endforeach
                            </td>
                            <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">
                                @foreach ($content->studios as $studio)
                                    {{ $studio->name }},
                                @endforeach
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    </table>
@endsection
