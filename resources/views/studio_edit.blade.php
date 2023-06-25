<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Staff</title>
</head>

<body>
    <h1>Edit Staff</h1>
    <form method="POST" action={{ action([App\Http\Controllers\StudioController::class, 'update'], ['studio' => $studio]) }}>
        @csrf
        @method('PUT')
        
        <label for="name">Genre</label>
        <input type="text" name="name" id="name" value="{{old('name', $studio->name)}}" required>
    </form>
</body>

</html>