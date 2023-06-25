<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $studio->genre }}</title>
</head>

<body>
    <h1>{{ $studio->name }}</h1>
    <a href={{ action([App\Http\Controllers\StudioController::class, 'edit'], ['studio' => $studio]) }}>Edit</a>
</body>

</html>