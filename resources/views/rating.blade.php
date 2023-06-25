<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ratings</title>
</head>

<body>
    <h1>Ratings</h1>
    <table>
        <thead>
            <tr>
                <th> User </th>
                <th> Content </th>
                <th> Rating </th>
                <th> Progress </th>
                <th> Is Favorite </th>
                <th> Date Started </th>
                <th> Date Finished </th>
                <th> Review </th>
            </tr>
        </thead>
        <tbody>
            @foreach($ratings as $rating)
            <tr>
                <td> {{ $rating->user->name }} </td>
                <td> {{ $rating->content->title }} </td>
                <td> {{ $rating->rating }} </td>
                <td> {{ $rating->progress }} </td>
                <td> {{ $rating->is_favorite }} </td>
                <td> {{ $rating->date_started }} </td>
                <td> {{ $rating->date_finished }} </td>
                <td> {{ $rating->review }} </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>