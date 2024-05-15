<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield("title")</title>
        @vite('resources/css/app.css')
    </head>
    <body class="bg-white text-erentBlack">
        <header class="z-[3] w-full fixed h-[65px] border-b-[3px] border-erentYellow flex justify-center bg-white">
            <div class="w-full px-4 max-w-[1440px] flex justify-between items-center">
                <div>
                    <a href="/">
                        <img src="{{ asset('images/logo.png') }}" alt="eRent logo" class="h-[40px]">
                    </a>
                </div>
                <nav>
                    <ul class="flex justify-end gap-3 text-lg">
                        <li><a href="/" class="hover:opacity-90 active:opacity-85">Home</a></li>
                        <li><a href="/" class="hover:opacity-90 active:opacity-85">Find Car</a></li>
                        <li><a href="/transaction" class="hover:opacity-90 active:opacity-85">My Transaction</a></li>
                        <li><a href="/about" class="hover:opacity-90 active:opacity-85">About Us</a></li>
                        <li><a href="/contact" class="hover:opacity-90 active:opacity-85">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </header>
        <main class="w-full min-h-screen pt-[65px] flex flex-col items-center gap-4">
            @yield("content");
        </main>
        <footer>
            Usman Lubis
        </footer>
    </body>
</html>
