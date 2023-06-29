@extends('layout')
@section('content')
    <h1>Edit Character</h1>
    <form method="POST" action={{ action([App\Http\Controllers\CharacterController::class, 'update'], ['character' => $character]) }}>
        @csrf
        @method('PUT')

        <label for="name">Name</label>
        <input type="text" name="name" id="name" value="{{old('name', $character->name)}}" required>
    </form>
@endsection
