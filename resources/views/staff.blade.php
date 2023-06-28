@extends('layout')
@section('content')
<body>
    <h1>Staff</h1>
    <a href="{{ route('staff.create') }}">New Staff</a>
    <ul>
        @foreach ($staff as $staff)
        <li>
            <a href="{{ route('staff.show', ['staff' => $staff->id])}}">{{ $staff->name }}</a>
            <form method="POST" action="{{ route('staff.destroy', $staff->id) }}">
                @csrf
                @method('DELETE')

                <button type="submit" value="delete">Delete</button>
            </form>
        </li>
        @endforeach
    </ul>
@endsection
