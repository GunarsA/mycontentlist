<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Staff</title>
</head>

<body>
    <h1>Edit Staff</h1>
    <form method="POST" action={{ action([App\Http\Controllers\GenreController::class, 'update'], ['genre' => $genre]) }}>
        @csrf
        @method('PUT')
        
        <label for="genre">Genre</label>
        <input type="text" name="genre" id="genre" value="{{old('genre', $genre->genre)}}" required>
    </form>
</body>

</html>