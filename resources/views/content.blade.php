<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Content Page</title>
</head>

<body>
    <h1>Content Page</h1>
    <a href={{ action([App\Http\Controllers\ContentController::class, 'create']) }}>New Content</a>
    <table>
        <thead>
            <tr>
                <th> Title </th>
                <th> Type </th>
                <th> Episode Count </th>
                <th> Length </th>
                <th> Year </th>
                <th> Genres </th>
                <th> Crew </th>
                <th> Cast </th>
            </tr>
        </thead>
        <tbody>
            @foreach($content as $content)
            <tr>
                <td> <a href={{ route('content.show', ['content' => $content->id])}}>{{ $content->title }}</a> </td>
                <td> {{ $content->type->type }} </td>
                <td> {{ $content->episode_cnt }} </td>
                <td> {{ $content->length }} </td>
                <td> {{ $content->year }} </td>
                <td>
                    @foreach($content->genres as $genre)
                    {{ $genre->genre }},
                    @endforeach
                <td>
                <td>
                    @foreach($content->crew as $crew)
                    {{ $crew->name }} ({{ $crew->position }}),
                    @endforeach
                </td>
                <td>
                    @foreach($content->cast as $cast)
                    {{ $cast->name }} ({{ $cast->character }}),
                    @endforeach
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>