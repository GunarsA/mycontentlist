<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $genre->genre }}</title>
</head>

<body>
    <h1>{{ $genre->genre }}</h1>
    <a href={{ action([App\Http\Controllers\GenreController::class, 'edit'], ['genre' => $genre]) }}>Edit</a>
</body>

</html>