<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Character</title>
</head>
<body>
    <h1>Characters</h1>
    <ul>
        @foreach ($characters as $character)
            <li>{{ $character->name }}</li>
        @endforeach
    </ul>
</body>
</html>