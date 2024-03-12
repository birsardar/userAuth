<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- Styles -->
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }

        .center-wrapper {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        a {
            text-decoration: none;
            color: black;
        }
        
     button:hover {
            background-color: blue;
            text-decoration: solid;
            color: white;
        }

        button {
            height: 50px;
            width: 100px;
            margin: 20px;
            border: 1px solid #000;
         
        }

        .header {
            display: flex;
            justify-content: center;
            align-content: center;
            align-items: center;
        }
    </style>
</head>

<body class="antialiased">
    <div class="header">
        <h1> TASK 1 OF BANAO- lARAVEL</h1>
    </div>
    <div class="center-wrapper">
        @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
            <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
            @else
            <button><a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>
            </button>
            @if (Route::has('register'))

            <button> <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
            </button>
            @endif
            @endauth
        </div>
        @endif
    </div>
</body>

</html>