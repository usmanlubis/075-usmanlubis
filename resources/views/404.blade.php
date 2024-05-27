@if (session()->get('isLogged'))
  @extends("layouts.app")

  @section("title", "Page Not Found")

  @section("content")
    <section class="w-full max-w-[1440px] p-4 flex items-center justify-center h-full">
      <div class="flex flex-col items-center justify-center mt-16">
          <svg class="icon-404" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-alert-triangle">
              <path d="M10.29 3.86L1.82 18a2.13 2.13 0 0 0 1.83 3.14h16.7a2.13 2.13 0 0 0 1.83-3.14L13.71 3.86a2.13 2.13 0 0 0-3.42 0z"></path>
              <line x1="12" y1="9" x2="12" y2="13"></line>
              <line x1="12" y1="17" x2="12" y2="17"></line>
          </svg>
          <h1 class="mb-4 text-4xl font-bold">404 - Page Not Found</h1>
          <p class="mb-8 text-lg">Sorry, the page you are looking for does not exist.</p>
          <a href="{{ route('homepage') }}" class="hover:opacity-90 hover:underline active:opacity-85">Back to home.</a>
      </div>
    </section>
  @endsection
@else
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>404 Not Found</title>
      <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
      @vite('resources/css/app.css')
      <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
  </head>
  <body class="w-full h-screen">
    <section class="w-full max-w-[1440px] p-4 flex items-center justify-center h-full">
      <div class="flex flex-col items-center justify-center mt-16">
          <svg class="icon-404" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-alert-triangle">
              <path d="M10.29 3.86L1.82 18a2.13 2.13 0 0 0 1.83 3.14h16.7a2.13 2.13 0 0 0 1.83-3.14L13.71 3.86a2.13 2.13 0 0 0-3.42 0z"></path>
              <line x1="12" y1="9" x2="12" y2="13"></line>
              <line x1="12" y1="17" x2="12" y2="17"></line>
          </svg>
          <h1 class="mb-4 text-4xl font-bold">404 - Page Not Found</h1>
          <p class="mb-8 text-lg">Sorry, the page you are looking for does not exist.</p>
          <a href="{{ route('homepage') }}" class="hover:opacity-90 hover:underline active:opacity-85">Back to home.</a>
      </div>
    </section>
  </body>
</html>
@endif