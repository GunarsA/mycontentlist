<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Content</title>
</head>

<body>
    <form action="POST" action={{ action([App\Http\Controllers\ContentController::class, 'store']) }}>
        @csrf
        <label for="title">Title</label>
        <input type="text" name="title" id="title" required>
        <label for="episode_cnt">Episode Count</label>
        <input type="number" name="episode_cnt" id="episode_cnt" required>
        <label for="length">Length</label>
        <input type="number" name="length" id="length" required>
        <label for="year">Year</label>
        <input type="number" name="year" id="year" required>
        <!-- <label for="genre">Genre</label>
        <select name="genre" id="genre">
            @foreach($genres as $genre)
            <option value="{{ $genre->id }}">{{ $genre->genre }}</option>
            @endforeach
        </select>
        <label for="staff">Staff</label>
        <select name="staff" id="staff">
            @foreach($staff as $staff)
            <option value="{{ $staff->id }}">{{ $staff->name }}</option>
            @endforeach
        </select>
        <label for="role">Role</label>
        <select name="role" id="role">
            <option value="Director">Director</option>
            <option value="Producer">Producer</option>
            <option value="Writer">Writer</option>
            <option value="Actor">Actor</option>
        </select> -->
        <input type="submit" value="Submit">
    </form>

</body>

</html>