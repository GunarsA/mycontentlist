<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Genre</title>
</head>

<body>
    <h1>New Genre</h1>
    <form method="POST" action={{ action([App\Http\Controllers\GenreController::class, 'store']) }}>
        @csrf
        <label for="genre">Genre</label>
        <input type="text" name="genre" id="genre" value="{{old('genre')}}" required>
    </form>
</body>

</html>