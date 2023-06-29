<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ __('gen.newStaff') }}</title>
</head>

<body>
    <h1>{{ __('gen.newStaff') }}</h1>
    <form method="POST" action={{ action([App\Http\Controllers\StaffController::class, 'store']) }}>
        @csrf
        <label for="name">{{ __('user.Name') }}</label>
        <input type="text" name="name" id="name" value="{{old('name')}}" required>
    </form>
</body>

</html>
