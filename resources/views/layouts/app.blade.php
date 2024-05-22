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
                        <li><a href="/" class="hover:opacity-90 active:opacity-85">Rent Car</a></li>
                        <li><a href="/transaction" class="hover:opacity-90 active:opacity-85">My Transaction</a></li>
                        <li><a href="/about" class="hover:opacity-90 active:opacity-85">About Us</a></li>
                        <li><a href="/contact" class="hover:opacity-90 active:opacity-85">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </header>
        <main class="w-full min-h-screen pt-[65px] flex flex-col items-center gap-4">
            @yield("content")
        </main>
        <footer  class="w-full">
            <div class="flex justify-center gap-6 w-full max-w-[1440px] mx-auto p-4 bg-[#c5c5c5]">
                <div class="flex flex-col gap-2">
                    <h3 class="text-xl font-semibold">Navigations</h3>
                    <ul>
                        <li><a href="/" class="hover:opacity-90 active:opacity-85">Home</a></li>
                        <li><a href="/rent" class="hover:opacity-90 active:opacity-85">Rent Car</a></li>
                        <li><a href="/transaction" class="hover:opacity-90 active:opacity-85">My Transaction</a></li>
                        <li><a href="/about" class="hover:opacity-90 active:opacity-85">About Us</a></li>
                        <li><a href="/contact" class="hover:opacity-90 active:opacity-85">Contact</a></li>
                    </ul>
                </div>
                <div class="flex flex-col gap-2">
                    <h3 class="text-xl font-semibold">Find Us On</h3>
                    <ul class="social-icons flex flex-col gap-1">
                        <li>
                            <a href="/" class="flex gap-1 hover:opacity-90 active:opacity-85">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12 2.163c3.2 0 3.584.012 4.847.07 1.17.055 1.97.243 2.43.414a4.92 4.92 0 011.677 1.086 4.917 4.917 0 011.085 1.676c.17.461.359 1.261.414 2.432.058 1.263.07 1.645.07 4.846 0 3.2-.012 3.583-.07 4.846-.055 1.171-.243 1.971-.414 2.432a4.917 4.917 0 01-1.085 1.676 4.918 4.918 0 01-1.677 1.086c-.461.17-1.261.359-2.43.414-1.263.058-1.646.07-4.847.07-3.201 0-3.584-.012-4.847-.07-1.17-.055-1.97-.243-2.431-.414a4.92 4.92 0 01-1.676-1.086 4.917 4.917 0 01-1.086-1.676c-.17-.461-.359-1.261-.414-2.432C2.175 15.583 2.163 15.2 2.163 12c0-3.201.012-3.584.07-4.847.055-1.171.243-1.971.414-2.432a4.917 4.917 0 011.086-1.676 4.92 4.92 0 011.676-1.086c.461-.17 1.261-.359 2.432-.414C8.416 2.175 8.8 2.163 12 2.163zm0 1.838c-3.17 0-3.553.012-4.805.07-1.015.047-1.558.215-1.926.363a3.085 3.085 0 00-1.147.748 3.086 3.086 0 00-.749 1.147c-.148.368-.316.911-.363 1.926-.058 1.251-.07 1.635-.07 4.805s.012 3.554.07 4.805c.047 1.015.215 1.558.363 1.926.174.457.415.867.748 1.147.28.28.69.572 1.147.748.368.148.911.316 1.926.363 1.251.058 1.635.07 4.805.07s3.554-.012 4.805-.07c1.015-.047 1.558-.215 1.926-.363a3.084 3.084 0 001.147-.748 3.084 3.084 0 00.748-1.147c.148-.368.316-.911.363-1.926.058-1.251.07-1.635.07-4.805s-.012-3.554-.07-4.805c-.047-1.015-.215-1.558-.363-1.926a3.084 3.084 0 00-.748-1.147 3.085 3.085 0 00-1.147-.748c-.368-.148-.911-.316-1.926-.363-1.251-.058-1.635-.07-4.805-.07zm0 3.923a5.91 5.91 0 110 11.819 5.91 5.91 0 010-11.819zm0 1.838a4.071 4.071 0 100 8.142 4.071 4.071 0 000-8.142zm6.406-1.841a1.381 1.381 0 110 2.762 1.381 1.381 0 010-2.762z"/></svg>
                                <span>Instagram</span>
                            </a>
                        </li>
                        <li>
                            <a href="/" class="flex gap-1 hover:opacity-90 active:opacity-85">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M23.954 4.569a10.01 10.01 0 01-2.825.775 4.932 4.932 0 002.163-2.724 9.868 9.868 0 01-3.127 1.184 4.924 4.924 0 00-8.388 4.49A13.978 13.978 0 011.671 3.149a4.918 4.918 0 001.523 6.573 4.9 4.9 0 01-2.229-.616c-.053 2.281 1.581 4.415 3.949 4.89a4.935 4.935 0 01-2.224.084 4.927 4.927 0 004.6 3.42A9.868 9.868 0 010 19.54a13.94 13.94 0 007.548 2.212c9.058 0 14.01-7.496 14.01-13.986 0-.214-.005-.428-.015-.641a9.936 9.936 0 002.459-2.548l.002-.002z"/></svg>
                                <span>Twitter</span>
                            </a>  
                        </li>                      
                        <li>
                            <a href="/" class="flex gap-1 hover:opacity-90 active:opacity-85">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M22.676 0H1.324C.593 0 0 .593 0 1.324v21.351C0 23.408.593 24 1.324 24H12.82v-9.294H9.692v-3.622h3.128V8.413c0-3.1 1.894-4.785 4.66-4.785 1.325 0 2.463.098 2.794.142v3.24h-1.917c-1.504 0-1.795.715-1.795 1.763v2.314h3.587l-.467 3.622h-3.12V24h6.116c.73 0 1.324-.592 1.324-1.324V1.324C24 .593 23.408 0 22.676 0"/></svg>
                                <span>Facebook</span>
                            </a>
                        </li>
                        <li>
                            <a href="/" class="flex gap-1 hover:opacity-90 active:opacity-85">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M23.498 6.186a2.959 2.959 0 00-2.084-2.092C19.234 3.67 12 3.67 12 3.67s-7.234 0-9.414.424a2.959 2.959 0 00-2.084 2.092A30.419 30.419 0 000 11.995a30.419 30.419 0 00.502 5.809 2.959 2.959 0 002.084 2.092c2.18.424 9.414.424 9.414.424s7.234 0 9.414-.424a2.959 2.959 0 002.084-2.092A30.419 30.419 0 0024 11.995a30.419 30.419 0 00-.502-5.809zM9.549 15.568v-7.146l6.267 3.573-6.267 3.573z"/></svg>
                                <span>YouTube</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="flex flex-col gap-2">
                    <h3 class="text-xl font-semibold">Copyrigth</h3>
                    <p>&copy; {{ date('Y') }} eRent made by <a href="https://www.github.com/usmanlubis" target="_blank" class="hover:opacity-90 hover:underline active:opacity-85">Usman Lubis</a></p>
                </div>
            </div>
        </footer>
    </body>
</html>
