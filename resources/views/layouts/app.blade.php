<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body {
            font-family: Sans-Serif;
            margin: 0;
        }

        .page-container {
            display: flex;
            min-height: 100vh;
            background-color: #322E38;
        }

        .content-container {
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }

        .header {
            background-color: #322E38;
            color: white;
            padding: 1rem;
        }

        .main-content {
            padding: 1rem;
            display: flex;
            overflow-x: auto;
            gap: 1rem;
            flex-grow: 1;
        }

        .square {
            flex: 0 0 300px;
            height: 450px;
            background-color: white;
            display: flex;
            justify-content: center;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .main-content::-webkit-scrollbar {
            height: 8px;
        }

        .main-content::-webkit-scrollbar-thumb {
            background-color: #4d3f44;
            border-radius: 4px;
        }

        .main-content::-webkit-scrollbar-thumb:hover {
            background-color: #4d3f44;
        }
    </style>
</head>

<body>
    <div class="page-container">
        @include('layouts.navigation')

        <div class="content-container">
            @isset($header)
                <header class="header">
                    <div class="container">
                        {{ $header }}
                    </div>
                </header>
            @endisset

            <main class="main-content">
                <div class="square">Other thing</div>
                <div class="square">Unread messages</div>
                <div class="square">Task List</div>
            </main>
        </div>
    </div>
</body>

</html>
