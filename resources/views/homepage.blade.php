@extends("layouts.app")

@section("title")
    eRent - Car Rental
@endsection

@section("content")
    <x-hero>
        <div class="relative flex flex-col items-center justify-center w-full h-full gap-2 text-white">
            <h2 class="text-[5rem] font-bold -my-6">eRent</h2>
            <p class="text-2xl">Find your perfect car at the best price</p>
            <div>
                <a href="/#rent-now" class="inline-block px-8 py-3 text-xl font-semibold rounded-lg bg-erentGreen active:bg-erentGreen/15 transition duration-100 hover:opacity-95 active:opacity-85 hover:scale-[1.05] ease-in-out text-white">Rent now</a>
            </div>
        </div>
    </x-hero>
    @include("partials.cars")
@endsection