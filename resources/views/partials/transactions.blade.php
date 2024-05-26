<section class="w-full max-w-[1440px] p-4">
    <h1 class="text-center font-bold text-3xl pb-[25px]">My Transactions</h1>
    @if(session()->get('role_id') == 1 && !$transactions)
        <p class="text-center italic">Currently no active transaction. <a href="{{ route('homepage') }}" class="!not-italic hover:opacity-90 hover:underline active:opacity-85">Back to home.</a></p>
    @elseif(session()->get('role_id') != 1 && !$transactions)
        <p class="text-center italic">You don't have active transaction. <a href="{{ route('homepage') }}#rent-now" class="!not-italic hover:opacity-90 hover:underline active:opacity-85">Rent a car.</a></p>
    @else
        <div class="w-full grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
            @foreach($transactions as $transaction)
                <div class="p-4 shadow-xl rounded">
                    <img src="{{ $transaction['carImage'] }}" alt="{{ $transaction['carImage'] }}" class="w-full h-48 object-cover rounded-t">
                    <h3 class="text-xl font-bold mt-4">{{ $transaction['carName'] }}</h3>
                    @if(session()->get('role_id') == 1)
                        <p>renter ID: {{ $transaction['renter_id'] }}</p>
                    @endif
                    <p>Return date: {{ $transaction['returnDate'] }}</p>
                    <p class="text-gray-600 mt-2 font-semibold text-lg">Rp. {{ number_format($transaction['totalPrice'], 0, ',', '.') }}</p>
                    <p class="text-erentGreen">&#10004; Active</p>
                    @if(session()->get('role_id') == 1)
                        <form action="{{ route('transaction-update') }}" method="POST">
                            @csrf
                            @method("PATCH")
                            <input type="number" name="id" value="{{ $transaction['id'] }}" required class="hidden">
                            <input type="number" name="car_id" value="{{ $transaction['car_id'] }}" required class="hidden">
                            <button type="submit" class="w-full mt-4 bg-erentYellow active:bg-erentYellow/15 transition duration-100 ease-in-out text-black px-4 py-2 rounded-md hover:bg-white hover:outline hover:outline-erentYellow">Set to Non-Active</button>
                        </form>
                    @endif
                </div>
            @endforeach
        </div>
    @endif
</section>