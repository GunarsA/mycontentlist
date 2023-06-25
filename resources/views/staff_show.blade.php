<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $staff->name }}</title>
</head>

<body>
    <h1>{{ $staff->name }}</h1>
    <a href={{ action([App\Http\Controllers\StaffController::class, 'edit'], ['staff' => $staff]) }}>Edit</a>
</body>

</html>