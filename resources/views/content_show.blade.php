<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$content->title}}</title>
</head>

<body>
    <h1>{{$content->title}}</h1>
    @if (Auth::user()->can('modify'))
    <a href={{ action([App\Http\Controllers\ContentController::class, 'edit'], ['content' => $content]) }}>Edit</a>
    @endif
    <h3>Content Type</h3>
    <p>{{ $content->type->type }}</p>
    <h3>Episode Count</h3>
    <p>{{ $content->episode_cnt }}</p>
    <h3>Length</h3>
    <p>{{ $content->length }}</p>
    <h3>Year</h3>
    <p>{{ $content->year }}</p>
    <h3>Genres</h3>
    <ul>
        @foreach($content->genres as $genre)
        <li>{{ $genre->genre }}</li>
        @endforeach
    </ul>
    <h3>Studios</h3>
    <ul>
        @foreach($content->studios as $studio)
        <li>{{ $studio->name }}</li>
        @endforeach
    </ul>
    <h3>Crew & Crew</h3>
    <ul>
        @foreach($content->staff as $staff)
        <li>{{ $staff->name }} ({{ $staff->position }})</li>
        @endforeach
    </ul>

</body>

</html>