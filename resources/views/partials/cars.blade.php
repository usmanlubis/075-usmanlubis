<section class="w-full max-w-[1440px] p-4">
    <h1 id="rent-now" class="{{ request()->is('/') ? 'pt-[70px]' : '' }} text-center font-bold text-3xl pb-[25px]">Rent Car</h1>
    <div class="w-full grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
        @foreach($cars as $car)
            <div class="p-4 shadow-xl rounded">
                <img src="{{ $car['image'] }}" alt="{{ $car['image'] }}" class="w-full h-48 object-cover rounded-t">
                <h3 class="text-xl font-bold mt-4">{{ $car['name'] }}</h3>
                <p class="text-gray-600 mt-2 font-semibold text-lg">Rp. {{ number_format($car['price'], 0, ',', '.') }}/day</p>
                @if($car["isAvailable"])
                    <p class="text-erentGreen">&#10004; Available</p>
                @else
                    <p class="text-red-700">&#10006; Unavalibale</p>
                @endif
                @if(session()->get('role_id') == 1)
                    <a href="/edit/{{ $car['id'] }}">
                        <button class="w-full mt-4 bg-erentYellow active:bg-erentYellow/15 transition duration-100 ease-in-out text-black px-4 py-2 rounded-md hover:bg-white hover:outline hover:outline-erentYellow">Edit Car</button>
                    </a>
                    @if($car["isAvailable"])
                        <a href="/delete/{{ $car['id'] }}">
                            <button class="w-full mt-4 bg-erentRed active:bg-erentRed/15 transition duration-100 ease-in-out text-white px-4 py-2 rounded-md hover:bg-white hover:text-erentRed hover:outline hover:outline-erentRed">Delete Car</button>
                        </a>
                    @endif
                @endif
                <a href="/car/{{ $car['id'] }}">
                    <button class="w-full mt-4 bg-erentGreen active:bg-erentGreen/15 transition duration-100 ease-in-out text-white px-4 py-2 rounded-md hover:bg-white hover:text-erentGreen hover:outline hover:outline-erentGreen">See Detail</button>
                </a>
            </div>
        @endforeach
    </div>
</section>