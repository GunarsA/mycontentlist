<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MyContentList</title>
    @vite('resources/css/app.css')
</head>

<body>
    <nav class="border-gray-500 dark:bg-gray-900">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4 shadow-md">
            <div class="flex items-center md:order-2">
                @if (Auth::check())
                    <p class="text-sm" style="margin-right:-12px;">{{ __('layout.welcome') }},</p>
                    <a href="{{ route('user.show', Auth::user()->id) }}"
                        class="text-sm font-semibold text-gray-700 dark:text-gray-200 hover:text-gray-900 dark:hover:text-gray-400 ml-4">
                        {{ Auth::user()->name }}
                    </a>
                @else
                    <a href="{{ route('login') }}"
                        class="text-sm text-gray-700 dark:text-gray-200 hover:text-gray-900 dark:hover:text-gray-400 ml-4">
                        {{ __('layout.login') }}
                    </a>
                @endif
                <a href={{ route('profile.edit') }}
                    class="text-sm text-gray-700 dark:text-gray-200 hover:text-gray-900 dark:hover:text-gray-400 ml-4">
                    <span class="">
                        {{ __('layout.dashboard') }}
                    </span>
                    <div class="">
                        @foreach (Config::get('languages') as $lang => $language)
                            @if (Config::get('languages') != App::getLocale())
                                <a style="" class="" href="{{ route('lang.switch', $lang) }}">
                                    {{ $language }}</a>
                            @endif
                        @endforeach
                    </div>
            </div>
            <ul
                class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                <li>
                    <a href="/"
                        class="
              @if (request()->is('/')) underline
              @else @endif
              block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700"
                        aria-current="page">{{ __('layout.home') }}</a>
                </li>
                <li>
                    <a href="{{ route('genre.index') }}"
                        class="
              @if (request()->is('genre')) underline
              @else @endif
              block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">{{ __('content.genres') }}</a>
                </li>
                <li>
                    <a href="studio"
                        class="
              @if (request()->is('studio')) underline
              @else @endif
              block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">{{ __('content.studios') }}</a>
                </li>
                <li>
                    <a href="character"
                        class="
              @if (request()->is('character')) underline
              @else @endif
              block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">{{ __('content.characters') }}</a>
                </li>
                <li>
                    <a href="user"
                        class="
              @if (request()->is('user')) underline
              @else @endif
              block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">{{ __('layout.users') }}</a>
                </li>
                <li>
                    <a href="staff"
                        class="
              @if (request()->is('staff')) underline
              @else @endif
              block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">{{ __('layout.staff') }}</a>
                </li>
                <li>
                    <a href="rating"
                        class="
              @if (request()->is('rating')) underline
              @else @endif
              block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">{{ __('layout.ratings') }}</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="px-16 py-8">
        @yield('content')
    </div>
</body>

</html>
