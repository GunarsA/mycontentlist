<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Staff</title>
</head>

<body>
    <h1>New Staff</h1>
    <form method="POST" action={{ action([App\Http\Controllers\StaffController::class, 'store']) }}>
        @csrf
        <label for="name">Name</label>
        <input type="text" name="name" id="name" value="{{old('name')}}" required>
    </form>
</body>

</html>