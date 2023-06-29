@extends('layout')
@section('content')
<h1 class="text-3xl font-bold text-black">{{ __('gen.users') }}</h1>
<ul class="mt-4">
    @foreach ($users as $user)
    <li class="bg-white shadow-lg rounded-lg p-6 mb-4">
        <a href={{ action([App\Http\Controllers\UserController::class, 'show'], [$user->id]) }} class="text-blue-500 hover:underline">{{ $user->name }}</a>
        @if($user->is_admin)
            <span class="bg-yellow-500 text-white px-2 py-1 rounded-full ml-2">{{ __('gen.admin') }}</span>
        @elseif($user->is_mod)
            <span class="bg-gray-500 text-white px-2 py-1 rounded-full ml-2">{{ __('gen.mod') }}</span>
        @endif
        <form action={{ action([App\Http\Controllers\UserController::class, 'changeModStatus'], [$user->id]) }} method="POST" class="inline-block">
            @csrf
            <button type="submit" class="text-white bg-blue-500 px-4 py-2 rounded-full ml-2 hover:bg-blue-700">{{ __('gen.changeStatus') }}</button>
        </form>
        <form action={{ action([App\Http\Controllers\UserController::class, 'destroy'], [$user->id]) }} method="POST" class="inline-block">
            @csrf
            @method('DELETE')
            <button type="submit" class="text-white bg-red-500 px-4 py-2 rounded-full ml-2 hover:bg-red-700">{{ __('gen.delete') }}</button>
        </form>
    </li>
    @endforeach
</ul>

@endsection
