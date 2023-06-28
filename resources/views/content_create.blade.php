@extends('layout')
@section('content')
@if ($errors->any())
<div>
    <ul>
        @foreach ($errors->all() as $error)
        <li style="color:red">{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<form method="POST" action={{ action([App\Http\Controllers\ContentController::class, 'store']) }} enctype="multipart/form-data">
    @csrf
    <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="title">
                {{ __('content.title') }}
            </label>
            <input
                class="appearance-none block w-full bg-gray-50 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                name="title" id="title" type="text" placeholder="Batman Rises">
            {{-- <p class="text-red-500 text-xs italic">Please fill out this field.</p> --}}
        </div>
        <div class="w-full md:w-1/2 px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="content_type">
                {{ __('content.type') }}
            </label>
            <div class="relative">
                <select class="block appearance-none w-full bg-gray-50 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"name="content_type" id="content_type">
                    @foreach ($types as $type)
                    <option value="{{ $type->id }}" {{old('content_type') == $type->id ? "selected" : ""}}>{{ $type->type }}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>
    <div class="flex flex-wrap -mx-3 mb-2">
        <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
            <label for="episode_cnt"
                class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">{{ __('content.ep_cnt') }}</label>
            <input type="text" name="episode_cnt" id="episode_cnt" required
                class="appearance-none block w-full bg-gray-50 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
        </div>
        <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
            <label for="length"
                class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">{{ __('content.length') }}</label>
            <input type="text" name="length" id="length" required
                class="appearance-none block w-full bg-gray-50 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
        </div>
        <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
            <label for="year"
                class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">{{ __('content.year') }}</label>
            <input type="text" name="year" id="year" required
                class="appearance-none block w-full bg-gray-50 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
        </div>
    </div>
    {{-- <div class="flex flex-wrap -mx-3 mb-2">
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
    </div> --}}
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
    {{-- <label for="title">Title</label>
    <input type="text" name="title" id="title" value="{{old('title')}}" required> --}}
    {{-- <label for="content_type">Content Type</label>
    <select name="content_type" id="content_type">
        @foreach($types as $type)
        <option value="{{ $type->id }}" {{old('content_type') == $type->id ? "selected" : ""}}>{{ $type->type }}</option>
        @endforeach
    </select> --}}
    {{-- <label for="episode_cnt">Episode Count</label>
    <input type="number" name="episode_cnt" id="episode_cnt" value="{{old('episode_cnt')}}" required>
    <label for="length">Length</label>
    <input type="number" name="length" id="length" value="{{old('length')}}" required>
    <label for="year">Year</label>
    <input type="number" name="year" id="year" value="{{old('year')}}" required>
    <br> --}}

    {{-- <label for="genre">Genre</label><br>
    <select name="genre[]" id="genre" multiple>
        @foreach($genres as $genre)
        <option value="{{ $genre->id }}" {{ (collect(old('genre'))->contains($genre->id)) ? 'selected':'' }}>{{ $genre->genre }}</option>
        @endforeach
    </select><br> --}}
    <br>
    <fieldset>
        <legend>{{ __('gen.selectGenres') }}:</legend>
        @foreach($genres as $genre)
            <input type="checkbox" value="{{ $genre->id }}" {{ (collect(old('genre'))->contains($genre->id)) ? 'selected':'' }} id='{{$genre->genre}}'>
        <option value="{{ $genre->id }}" {{ (collect(old('genre'))->contains($genre->id)) ? 'selected':'' }}>{{ __('gen.'.strtolower($genre->genre)) }}</option>
        {{-- <label for='{{ $genres->genre }}'>{{ $gen }}</label> --}}
        @endforeach
    </fieldset><br>
    <label for="studio">{{ __('gen.studio') }}</label><br>
    <select name="studio[]" id="studio" multiple>
        @foreach($studios as $studio)
        <option value="{{ $studio->id }}" {{(collect(old('studio'))->contains($studio->id)) ? 'selected':'' }}>{{ $studio->name }}</option>
        @endforeach
    </select>

    @foreach($positions as $position)
    <br>
    <label for="{{ $position->position }}">{{ $position->position }}</label><br>
    <select name="{{ $position->position }}[]" id="{{ $position->position }}" multiple>
        @foreach($staff as $stafff)
        <option value="{{ $stafff->id }}" {{ (collect(old($position->position))->contains($stafff->id)) ? 'selected':'' }}>{{ $stafff->name }}</option>
        @endforeach
    </select><br>
    @endforeach

    <label for="character">Character</label><br>
    <select name="character[]" id="character" multiple>
        @foreach($characters as $character)
        <option value="{{ $character->id }}" {{(collect(old('character'))->contains($character->id)) ? 'selected':'' }}>{{ $character->name }}</option>
        @endforeach
    </select>
    <br>
    <label for="image">Image</label>
    <input type="file" name="image" id="image">

    <div class="block">
        <input type="submit" value="Submit" class="inline-block px-4 py-2 mb-4 bg-blue-500 text-white rounded hover:bg-blue-600">
    </div>
</form>
@endsection

{{--
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Content</title>
</head>

<body>
    @if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
            <li style="color:red">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form method="POST" action={{ action([App\Http\Controllers\ContentController::class, 'store']) }} enctype="multipart/form-data">
        @csrf
        <label for="title">Title</label>
        <input type="text" name="title" id="title" value="{{old('title')}}" required>
        <label for="content_type">Content Type</label>
        <select name="content_type" id="content_type">
            @foreach($types as $type)
            <option value="{{ $type->id }}" {{old('content_type') == $type->id ? "selected" : ""}}>{{ $type->type }}</option>
            @endforeach
        </select>
        <label for="episode_cnt">Episode Count</label>
        <input type="number" name="episode_cnt" id="episode_cnt" value="{{old('episode_cnt')}}" required>
        <label for="length">Length</label>
        <input type="number" name="length" id="length" value="{{old('length')}}" required>
        <label for="year">Year</label>
        <input type="number" name="year" id="year" value="{{old('year')}}" required>
        <br>

        <label for="genre">Genre</label>
        <select name="genre[]" id="genre" multiple>
            @foreach($genres as $genre)
            <option value="{{ $genre->id }}" {{ (collect(old('genre'))->contains($genre->id)) ? 'selected':'' }}>{{ $genre->genre }}</option>
            @endforeach
        </select>
        <label for="studio">Studio</label>
        <select name="studio[]" id="studio" multiple>
            @foreach($studios as $studio)
            <option value="{{ $studio->id }}" {{(collect(old('studio'))->contains($studio->id)) ? 'selected':'' }}>{{ $studio->name }}</option>
            @endforeach
        </select>

        @foreach($positions as $position)
        <label for="{{ $position->position }}">{{ $position->position }}</label>
        <select name="{{ $position->position }}[]" id="{{ $position->position }}" multiple>
            @foreach($staff as $stafff)
            <option value="{{ $stafff->id }}" {{ (collect(old($position->position))->contains($stafff->id)) ? 'selected':'' }}>{{ $stafff->name }}</option>
            @endforeach
        </select>
        @endforeach

        <label for="character">Character</label>
        <select name="character[]" id="character" multiple>
            @foreach($characters as $character)
            <option value="{{ $character->id }}" {{(collect(old('character'))->contains($character->id)) ? 'selected':'' }}>{{ $character->name }}</option>
            @endforeach
        </select>

        <label for="image">Image</label>
        <input type="file" name="image" id="image">

        <input type="submit" value="Submit">
    </form>

</body>

</html> --}}
