<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Sign Up eRent</title>
      @vite('resources/css/app.css')
  </head>
  <body>
    <main class="login w-full h-screen flex justify-center items-center p-4">
      <div class="flex flex-col gap-3 w-full max-w-[450px] border-2 p-4 shadow-lg rounded-lg">
        <img src="{{ asset('images/logo.png') }}" alt="eRent Logo" class="h-[80px] mx-auto">
        <h1 class="text-3xl text-center font-bold text-black/90 mt-8">Sign Up</h1>
        @if(session()->get("error"))
          <p class="text-erentRed text-center -mt-2">{{ session()->get("error") }}</p>
        @endif
        <form id="signup-form" action="{{ route('signup') }}" method="POST" class="flex flex-col gap-4">
          @csrf
          <div class="flex flex-col gap-1">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="signup-input-name input w-full p-1 rounded-md focus:outline-2 focus:outline-erentGreen" required>
            <small id="nameError" class="error" style="display:none;">Name must at least 3 characters.</small>
          </div>
          <div class="flex flex-col gap-1">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="input w-full p-1 rounded-md focus:outline-2 focus:outline-erentGreen" required>
          </div>
          <div class="flex flex-col gap-1">
            <label for="phone">Phone</label>
            <input type="tel" pattern="^0[0-9]{9,12}$" name="phone" id="phone" class="input w-full p-1 rounded-md focus:outline-2 focus:outline-erentGreen" required>
            <small>Format: 0xxxxxxxxxx (10-13 digit)</small>
          </div>
          <div class="flex flex-col gap-1">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" class="input w-full p-1 rounded-md focus:outline-2 focus:outline-erentGreen" required>
          </div>
          <div>
            <button type="submit" class="w-full mt-4 bg-erentGreen active:bg-erentGreen/15 transition duration-100 ease-in-out text-white px-4 py-2 rounded-md hover:bg-white hover:text-erentGreen hover:outline hover:outline-erentGreen">Sign Up</button>
          </div>
          <div>
            <p class="text-center">Already have an account? <a href="{{ route('login-page') }}" class="hover:opacity-90 hover:underline active:opacity-85">Log In</a></p>
          </div>
        </form>
      </div>
    </main>

    <script src="{{ asset('js/script.js') }}"></script>
  </body>
</html>