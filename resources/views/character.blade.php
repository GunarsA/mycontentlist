<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Characters</title>
</head>

<body>
    <h1>Characters</h1>
    <a href="{{ route('character.create') }}">New Character</a>
    <ul>
        @foreach ($characters as $character)
        <li>
            <a href="{{ route('character.show', ['character' => $character->id])}}">{{ $character->name }}</a>
            <form method="POST" action="{{ route('character.destroy', $character->id) }}">
                @csrf
                @method('DELETE')

                <button type="submit" value="delete">Delete</button>
            </form>
        </li>
        @endforeach
    </ul>
</body>

</html>