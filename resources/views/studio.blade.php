<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Studios</title>
</head>

<body>
    <h1>Studios</h1>
    <a href="{{ route('studio.create') }}">New Studio</a>
    <ul>
        @foreach ($studios as $studio)
        <li>
            <a href="{{ route('studio.show', ['studio' => $studio->id])}}">{{ $studio->name }}</a>
            <form method="POST" action="{{ route('studio.destroy', $studio->id) }}">
                @csrf
                @method('DELETE')

                <button type="submit" value="delete">Delete</button>
            </form>
        </li>
        @endforeach
    </ul>
</body>

</html>