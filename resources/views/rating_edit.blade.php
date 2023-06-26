<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Content</title>
</head>

<body>
    <h1>{{ $rating->content->title }}</h1>
    <form method="POST" action={{ action([App\Http\Controllers\RatingController::class, 'update'], ['rating' => $rating]) }}>
        @csrf
        @method('PUT')
        <input type="hidden" name="user_id" id="user_id" value="{{ $rating->user->id }}">
        <input type="hidden" name="content_id" id="content_id" value="{{ $rating->content_id }}">

        <label for="rating">Rating</label>
        <input type="number" name="rating" id="rating" min="1" max="10" value={{old('rating', $rating->rating)}}>

        <label for="progress">Progress</label>
        <input type="number" name="progress" id="progress" min="0" max={{ $rating->content->episode_cnt }} value={{old('progress', $rating->progress)}}>

        <label for="is_favorite">Favorite</label>
        <input type="checkbox" name="is_favorite" id="is_favorite" {{old('is_favorite', $rating->is_favorite) ? 'checked':''}}>

        <label for="date_started">Date Started</label>
        <input type="date" name="date_started" id="date_started" value={{old('date_started', $rating->date_started)}}>

        <label for="date_finished">Date Finished</label>
        <input type="date" name="date_finished" id="date_finished" value={{old('date_finished', $rating->date_finished)}}>

        <label for="review">Review</label>
        <textarea name="review" id="review" cols="30" rows="10">{{old('review', $rating->review)}}</textarea>

        <input type="submit" value="Submit">
    </form>

</body>

</html>