<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">



        <div class="header container mx-auto mb-5 flex">

            <div class="w-1/3 text-green-700 text-xl font-medium uppercase">
                title
            </div>
            <div class="w-1/3 bg-blue-400">
                <ul class="flex">
                    <a class="px-2 font-semibold text-gray-700" href="#"><li>First</li></a>
                    <a class="px-2 font-semibold text-gray-700" href="#"><li>Second</li></a>
                    <a class="px-2 font-semibold text-gray-700" href="#"><li>Third</li></a>
                    <a class="px-2 font-semibold text-gray-700" href="#"><li>Forth</li></a>
                </ul>
            </div>

            <div class="w-1/3 flex justify-end bg-emerald-300">
                @if (Route::has('login'))
                    <div class="wwww">
                        @auth
                            <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                        @else
                            <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}"
                                   class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                            @endif
                        @endauth
                    </div>
                @endif
            </div>

        </div>
        @yield('content')

    </div>
</body>
</html>
