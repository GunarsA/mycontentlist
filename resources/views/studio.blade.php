<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Studios</title>
</head>

<body>
    <h1>Studios</h1>
    <ul>
        @foreach ($studios as $studio)
        <li>{{ $studio->name }}</li>
        @endforeach
    </ul>
</body>

</html>