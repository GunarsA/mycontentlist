@extends('layout')
@section('content')
<a href={{ action([App\Http\Controllers\ContentController::class, 'create']) }}>New Content</a>
<table class="table-auto">
    <thead>
        <tr>
            <th> Title </th>
            <th> Type </th>
            <th> Episode Count </th>
            <th> Length </th>
            <th> Year </th>
            <th> Genres </th>
            <th> Crew & Cast </th>
            <th>Characters</th>
        </tr>
    </thead>
    <tbody>
        @foreach($content as $content)
        <tr>
            <td><img src="{{url('storage/' . $content->image_path)}}"></td>
            <td> <a href={{ route('content.show', ['content' => $content->id])}}>{{ $content->title }}</a> </td>
            <td> {{ $content->type->type }} </td>
            <td> {{ $content->episode_cnt }} </td>
            <td> {{ $content->length }} </td>
            <td> {{ $content->year }} </td>
            <td>
                @foreach($content->genres as $genre)
                {{ $genre->genre }},
                @endforeach
            <td>
            <td>
                @foreach($content->staff as $staff)
                {{ $staff->name }} ({{ $staff->position }}),
                @endforeach
            </td>
            <td>
                @foreach($content->characters as $character)
                {{ $character->name }},
                @endforeach
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection