<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$rating->user->name}} {{$rating->content->name}}</title>
</head>

<body>
    <h1>{{$rating->content->name}}</h1>

    <h3>Rating</h3>
    <p>{{ $rating->rating }}</p>
    <h3>Progress</h3>
    <p>{{ $rating->progress }}</p>
    <h3>Is Favorite</h3>
    <p>{{ $rating->is_favorite }}</p>
    <h3>Date Started</h3>
    <p>{{ $rating->date_started }}</p>
    <h3>Date Finished</h3>
    <p>{{ $rating->date_finished }}</p>
    <h3>Review</h3>
    <p>{{ $rating->review }}</p>
    
</body>

</html>