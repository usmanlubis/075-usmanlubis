@extends("layouts.app")

@section("title")
    Contact eRent
@endsection

@section("content")
    <x-hero>
        <div class="relative h-full w-full flex justify-center items-center p-4">
            <div class="w-full max-w-[1080px] bg-erentYellow rounded-xl shadow-lg p-6">
                <form action="" class="flex flex-col md:flex-row gap-4 justify-between">
                    <div class="flex flex-col gap-4 w-full md:w-[50%] max-w-[450px]">
                        <div class="flex flex-col">
                            <label for="name">Name</label>
                            <input type="text" name="email" id="name" required class="w-full p-1 rounded-md focus:outline-2 focus:outline-erentGreen">
                        </div>
                        <div class="flex flex-col">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" required class="w-full p-1 rounded-md focus:outline-2 focus:outline-erentGreen">
                        </div>
                    </div>
                    <div class="flex flex-col gap-4 w-full md:w-[50%] max-w-[450px]">
                        <div class="flex flex-col">
                            <label for="message">Message</label>
                            <textarea name="message" id="message" rows="3" class="w-full p-1 rounded-md focus:outline-2 focus:outline-erentGreen"></textarea>
                        </div>
                        <div>
                            <button class="w-full bg-erentGreen py-2 px-4 rounded-md text-white active:bg-erentGreen/15 transition duration-100 ease-in-out hover:bg-white hover:text-erentGreen hover:outline hover:outline-erentGreen">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </x-hero>
@endsection
