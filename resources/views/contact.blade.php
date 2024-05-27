@extends("layouts.app")

@section("title")
    Contact eRent
@endsection

@section("content")
    <x-hero>
        <div class="relative flex items-center justify-center w-full h-full p-4">
            <div class="w-full max-w-[1080px] bg-erentYellow rounded-xl shadow-lg p-6">
                <form action="" class="flex flex-col justify-between gap-4 md:flex-row">
                    <div class="flex flex-col gap-4 w-full md:w-[50%]">
                        <div class="flex flex-col">
                            <label for="name">Name</label>
                            <input type="text" name="email" id="name" required class="w-full p-1 rounded-md focus:outline-2 focus:outline-erentGreen">
                        </div>
                        <div class="flex flex-col">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" required class="w-full p-1 rounded-md focus:outline-2 focus:outline-erentGreen">
                        </div>
                    </div>
                    <div class="flex flex-col gap-4 w-full md:w-[50%]">
                        <div class="flex flex-col">
                            <label for="message">Message</label>
                            <textarea name="message" id="message" rows="3" class="w-full p-1 rounded-md focus:outline-2 focus:outline-erentGreen"></textarea>
                        </div>
                        <div>
                            <button class="w-full px-4 py-2 text-white transition duration-100 ease-in-out rounded-md bg-erentGreen active:bg-erentGreen/15 hover:bg-white hover:text-erentGreen hover:outline hover:outline-erentGreen">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </x-hero>
@endsection
