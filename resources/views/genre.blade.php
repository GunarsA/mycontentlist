<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Genres</title>
</head>

<body>
    <h1>Genres</h1>
    <a href={{ action([App\Http\Controllers\GenreController::class, 'create']) }}>New Genre</a>
    <ul>
        @foreach ($genres as $genre)
        <li>
            <a href="{{ route('genre.show', ['genre' => $genre->id])}}">{{ $genre->genre }}</a>
            <form method="POST" action="{{ route('genre.destroy', $genre->id) }}">
                @csrf
                @method('DELETE')

                <button type="submit" value="delete">Delete</button>
            </form>
        </li>
        @endforeach
    </ul>
</body>

</html>