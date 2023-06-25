<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Staff</title>
</head>

<body>
    <h1>Edit Staff</h1>
    <form method="POST" action={{ action([App\Http\Controllers\StaffController::class, 'update'], ['staff' => $staff]) }}>
        @csrf
        @method('PUT')
        
        <label for="name">Name</label>
        <input type="text" name="name" id="name" value="{{old('name', $staff->name)}}" required>
    </form>
</body>

</html>