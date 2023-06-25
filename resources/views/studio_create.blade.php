<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Studio</title>
</head>

<body>
    <h1>New Studio</h1>
    <form method="POST" action={{ action([App\Http\Controllers\StudioController::class, 'store']) }}>
        @csrf
        <label for="name">Studio</label>
        <input type="text" name="name" id="name" value="{{old('name')}}" required>
    </form>
</body>

</html>