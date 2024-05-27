<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield("title")</title>
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>
        @vite('resources/css/app.css')
        <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    </head>
    <body class="bg-white text-erentBlack">
        @include("partials.header")
        <main class="w-full min-h-screen pt-[65px] flex flex-col items-center gap-4">
            @yield("content")
        </main>
        @include("partials.footer")

        <script src="{{ asset('js/script.js') }}"></script>
    </body>
</html>
