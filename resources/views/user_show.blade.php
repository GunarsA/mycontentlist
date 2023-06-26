<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $user->name }}</title>
</head>
<body>
    <h1>{{ $user->name }}</h1>

    <h2>Ratings</h2>
    <ul>
        @foreach ($user->ratings as $rating)
        <li>
            <a href={{ action([App\Http\Controllers\RatingController::class, 'show'], [$rating->id]) }}>{{ $rating->content->title }}</a>
        </li>
        @endforeach
    </ul>

</body>
</html>