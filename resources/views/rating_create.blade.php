<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Content</title>
</head>

<body>
    <h1>{{ $content->title }}</h1>
    <form method="POST" action={{ action([App\Http\Controllers\RatingController::class, 'update', ['rating' => $rating]]) }}>
        @csrf
        <input type="hidden" name="user_id" id="user_id" value="{{ $user->id }}">
        <input type="hidden" name="content_id" id="content_id" value="{{ $content->id }}">

        <label for="rating">Rating</label>
        <input type="number" name="rating" id="rating" min="1" max="10" value={{old('rating', $rating->rating)}}>

        <label for="progress">Progress</label>
        <input type="number" name="progress" id="progress" min="0" max={{ $content->episode_cnt }}>

        <label for="is_favorite">Favorite</label>
        <input type="checkbox" name="is_favorite" id="is_favorite">

        <label for="date_started">Date Started</label>
        <input type="date" name="date_started" id="date_started">

        <label for="date_finished">Date Finished</label>
        <input type="date" name="date_finished" id="date_finished">

        <label for="review">Review</label>
        <textarea name="review" id="review" cols="30" rows="10"></textarea>

        <input type="submit" value="Submit">
    </form>

</body>

</html>