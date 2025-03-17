<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>{{ $title ?? 'Jonah Portfolio' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        ::-webkit-scrollbar {
            width: 0;
        }
    </style>
</head>

<body class="bg-slate-950">
    <main class="container mx-auto max-w-7xl">

        {{ $slot }}
    </main>

    @stack('scripts')
</body>

</html>
