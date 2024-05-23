<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Login eRent</title>
      @vite('resources/css/app.css')
  </head>
<body>
  <main class="login w-full h-screen flex justify-center items-center p-4 border-2 border-black">
    <div class="flex flex-col gap-3 w-full max-w-[450px] border-2 p-4 shadow-lg rounded-lg">
      <img src="{{ asset('images/logo.png') }}" alt="eRent Logo" class="h-[80px] mx-auto">
      <h1 class="text-3xl text-center font-bold text-black/90 mt-8">Login</h1>
      <form action="" class="flex flex-col gap-4">
        <div class="flex flex-col gap-1">
          <label for="email">Email</label>
          <input type="email" name="email" id="email" class="input w-full p-1 rounded-md focus:outline-2 focus:outline-erentGreen" required>
        </div>
        <div class="flex flex-col gap-1">
          <label for="password">Password</label>
          <input type="password" name="password" id="password" class="input w-full p-1 rounded-md focus:outline-2 focus:outline-erentGreen" required>
        </div>
        <div>
          <button type="submit" class="w-full mt-4 bg-erentGreen active:bg-erentGreen/15 transition duration-100 ease-in-out text-white px-4 py-2 rounded-md hover:bg-white hover:text-erentGreen hover:outline hover:outline-erentGreen">Login</button>
        </div>
      </form>
    </div>
  </main>
</body>
</html>