@extends("layouts.app")

@section("title")
    About eRent
@endsection

@section("content")
    <x-hero>
        <div class="relative h-full flex justify-center items-center">
            <div class="max-w-[780px] text-white flex flex-col gap-2">
                <h1 class="text-3xl font-bold text-center mb-4">About Us</h1>
                <p>Welcome to <strong>eRent</strong>, your number one solution for car rental bookings. We are dedicated to giving you the very best rental experience, with a focus on convenience, customer service, and a wide variety of vehicles.</p>
                <p>Founded in 2024, eRent has come a long way from its beginnings. When we first started out, our passion for providing an easy and accessible car rental service drove us to start our own business.</p>
                <p>Thank you for choosing eRent!</p>
            </div>
        </div>
    </x-hero>
@endsection