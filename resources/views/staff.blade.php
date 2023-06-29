@extends('layout')
@section('content')
    <h1 class="text-3xl font-bold text-black">{{ __('gen.staff') }}</h1>
    <a href="{{ route('staff.create') }}" class="text-blue-500 hover:underline mt-4">{{ __('gen.newStaff') }}</a>
    <ul class="mt-4">
        @foreach ($staff as $staffMember)
            <li class="bg-white shadow-lg rounded-lg p-6 mb-4">
                <a href="{{ route('staff.show', ['staff' => $staffMember->id]) }}"
                    class="text-blue-500 hover:underline">{{ $staffMember->name }}</a>
                <form method="POST" action="{{ route('staff.destroy', $staffMember->id) }}" class="inline-block">
                    @csrf
                    @method('DELETE')
                    <button type="submit"
                        class="text-white bg-red-500 px-4 py-2 rounded-full ml-2 hover:bg-red-700">{{ __('gen.delete') }}</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
