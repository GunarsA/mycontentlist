@extends('layout')
@section('content')
    @if (Auth::check() && Auth::user()->can('modify'))
        <a class="block text-red-500 font-semibold py-4 px-4 font-mono" href={{ action([App\Http\Controllers\ContentController::class, 'create']) }}>{{__('content.newContent')}}</a>
    @endif
    <div class="mx-auto max-w-screen">
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            <span class="sr-only">{{ __('content.poster')}}</span>
                        </th>
                        <th scope="col" class="px-6 py-3">
                            {{ __('content.title') }}
                        </th>
                        <th scope="col" class="px-6 py-3">
                            {{ __('content.type')}}
                        </th>
                        <th scope="col" class="px-6 py-3">
                            {{ __('content.ep_cnt')}}
                        </th>
                        <th scope="col" class="px-6 py-3">
                            {{ __('content.length')}}
                        </th>
                        <th scope="col" class="px-6 py-3">
                            {{ __('content.year')}}
                        </th>
                        <th scope="col" class="px-6 py-3">
                            {{ __('content.genres')}}
                        </th>
                        <th scope="col" class="px-6 py-3">
                            {{ __('content.cast')}}
                        </th>
                        <th scope="col" class="px-6 py-3">
                            {{ __('content.characters')}}
                        </th>
                        <th scope="col" class="px-6 py-3">
                            {{ __('content.studios')}}
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
                                    ({{ __('content.rate')}})
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
