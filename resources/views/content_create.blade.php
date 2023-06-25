@extends('layout')
@section('content')
    <div class="grid place-items-center">
        <form class="w-full max-w-lg" action={{ action([App\Http\Controllers\ContentController::class, 'store']) }}>
            @csrf
            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="title">
                        Title
                    </label>
                    <input
                        class="appearance-none block w-full bg-gray-50 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                        id="title" type="text" placeholder="Batman Rises">
                    <p class="text-red-500 text-xs italic">Please fill out this field.</p>
                </div>
                <div class="w-full md:w-1/2 px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="content_type">
                        Content Type
                    </label>
                    <div class="relative">
                        <select
                            class="block appearance-none w-full bg-gray-50 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="content_type">
                            @foreach ($types as $type)
                                <option value="{{ $type->id }}"
                                    {{ old('content_type') == $type->id ? 'selected' : '' }}>
                                    {{ $type->type }}</option>
                            @endforeach
                        </select>
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-wrap -mx-3 mb-2">
                <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                    <label for="episode_cnt"
                        class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Episode Count</label>
                    <input type="text" name="episode_cnt" id="episode_cnt" required
                        class="appearance-none block w-full bg-gray-50 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                </div>
                <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                    <label for="length"
                        class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Length</label>
                    <input type="text" name="length" id="length" required
                        class="appearance-none block w-full bg-gray-50 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                </div>
                <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                    <label for="year"
                        class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Year</label>
                    <input type="text" name="year" id="year" required
                        class="appearance-none block w-full bg-gray-50 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                </div>
            </div>
            <div class="flex flex-wrap -mx-3 mb-2">
                <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="genre">
                        Genre
                    </label>
                    <div class="relative">
                        <select name="genre[]" id="genre" class="block appearance-none w-full bg-gray-50 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                            @foreach ($genres as $genre)
                                <option value="{{ $genre->id }}">{{ $genre->genre }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="studio">
                        Studio
                    </label>
                    <div class="relative">
                        <select name="genre[]" id="studio" class="block appearance-none w-full bg-gray-50 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                            @foreach ($studios as $studio)
                            <option value="{{ $studio->id }}">{{ $studio->name }}</option>
                        @endforeach
                        </select>
                    </div>
                </div>
            </div>
            {{-- <div class="flex flex-wrap -mx-3 mb-2">
                @foreach ($positions as $position)
                <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                    <label for="{{ $position->position }}" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">{{ $position->position }}</label>
                    <div class="relative">
                        <select name="{{ $position->position }}[]" id="{{ $position->position }}" class="block appearance-none w-full bg-gray-50 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                            @foreach ($staff as $stafff)
                                <option value="{{ $stafff->id }}">{{ $stafff->name }}</option>
                            @endforeach
                        </select>
                    @endforeach
                    </div>
                </div>
            </div> --}}
            <div class="block">
                <input type="submit" value="Submit" class="bg-gray-20 hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow">
            </div>
        </form>
    </div>
@endsection
