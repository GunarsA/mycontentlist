<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ __('gen'.strtolower($genre->genre)) }}</title>
</head>

<body>
    <h1>{{ $genre->genre }}</h1>
    <a href={{ action([App\Http\Controllers\GenreController::class, 'edit'], ['genre' => $genre]) }}>{{ __('gen.edit') }}</a>
    <h3>{{ __('gen.content') }}</h3>
    <ul>
        @foreach ($genre->content as $content)
        <li><a href={{ action([App\Http\Controllers\ContentController::class, 'show'], ['content' => $content]) }}>{{ $content->title }}</a></li>
        @endforeach
    </ul>
</body>

</html>
