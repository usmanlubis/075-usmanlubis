@extends("layouts.app")

@section("title")
    eRent - Car Rental
@endsection

@section("content")
    <section class="hero-section w-full max-w-[1440px] px-4">
        <div class="relative flex flex-col items-center justify-center w-full h-full gap-2 text-white">
            <h2 class="text-[5rem] font-bold -my-6">eRent</h2>
            <p class="text-2xl">Find your perfect car at the best price</p>
            <div>
                <a href="/#rent-now" class="inline-block px-8 py-3 text-xl font-semibold rounded-lg hover:opacity-90 active:opacity-80 bg-erentGreen">Rent now</a>
            </div>
        </div>
    </section>
    @yield("cars")
    <section class="w-full max-w-[1440px] px-4">
        <h1 id="rent-now" class="text-center font-bold text-3xl pb-[25px]">Rent Car</h1>
        <div class="w-full grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
            <!-- Card 1 -->
            <div class="p-4 shadow-xl rounded">
                <img src="{{ asset('images/agya.png') }}" alt="Car 1" class="w-full h-48 object-cover rounded-t">
                <h3 class="text-xl font-bold mt-4">Car 1</h3>
                <p class="text-gray-600 mt-2">Rp. 500.000/hari</p>
                <button class="mt-4 bg-blue-500 text-white px-4 py-2 rounded">See Detail</button>
            </div>
            <!-- Card 2 -->
            <div class="bg-white p-4 shadow rounded">
                <img src="https://via.placeholder.com/300x200" alt="Car 2" class="w-full h-48 object-cover rounded-t">
                <h3 class="text-xl font-bold mt-4">Car 2</h3>
                <p class="text-gray-600 mt-2">Rp. 600.000/hari</p>
                <button class="mt-4 bg-blue-500 text-white px-4 py-2 rounded">See Detail</button>
            </div>
            <!-- Card 3 -->
            <div class="bg-white p-4 shadow rounded">
                <img src="https://via.placeholder.com/300x200" alt="Car 3" class="w-full h-48 object-cover rounded-t">
                <h3 class="text-xl font-bold mt-4">Car 3</h3>
                <p class="text-gray-600 mt-2">Rp. 700.000/hari</p>
                <button class="mt-4 bg-blue-500 text-white px-4 py-2 rounded">See Detail</button>
            </div>
            <!-- Card 4 -->
            <div class="bg-white p-4 shadow rounded">
                <img src="https://via.placeholder.com/300x200" alt="Car 4" class="w-full h-48 object-cover rounded-t">
                <h3 class="text-xl font-bold mt-4">Car 4</h3>
                <p class="text-gray-600 mt-2">Rp. 800.000/hari</p>
                <button class="mt-4 bg-blue-500 text-white px-4 py-2 rounded">See Detail</button>
            </div>
            <!-- Repeat similarly for the remaining 16 cards -->
            <!-- Card 5 -->
            <div class="bg-white p-4 shadow rounded">
                <img src="https://via.placeholder.com/300x200" alt="Car 5" class="w-full h-48 object-cover rounded-t">
                <h3 class="text-xl font-bold mt-4">Car 5</h3>
                <p class="text-gray-600 mt-2">Rp. 900.000/hari</p>
                <button class="mt-4 bg-blue-500 text-white px-4 py-2 rounded">See Detail</button>
            </div>
            <!-- Card 6 -->
            <div class="bg-white p-4 shadow rounded">
                <img src="https://via.placeholder.com/300x200" alt="Car 6" class="w-full h-48 object-cover rounded-t">
                <h3 class="text-xl font-bold mt-4">Car 6</h3>
                <p class="text-gray-600 mt-2">Rp. 1.000.000/hari</p>
                <button class="mt-4 bg-blue-500 text-white px-4 py-2 rounded">See Detail</button>
            </div>
            <!-- Continue for remaining cards -->
            <!-- Card 7 to Card 20 similar to the above -->
        </div>
        </section>
@endsection