<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff</title>
</head>

<body>
    <h1>Staff</h1>
    <ul>
        @foreach ($staff as $staff)
        <li>{{ $staff->name }}</li>
        @endforeach
    </ul>
</body>

</html>