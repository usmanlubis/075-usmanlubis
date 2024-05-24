<section class="w-full max-w-[1440px] p-4">
    <h1 class="text-center font-bold text-3xl pb-[25px]">My Transactions</h1>
    <div class="w-full grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
        @foreach($transactions as $transaction)
            <div class="p-4 shadow-xl rounded">
                <img src="{{ $transaction['carImage'] }}" alt="{{ $transaction['carImage'] }}" class="w-full h-48 object-cover rounded-t">
                <h3 class="text-xl font-bold mt-4">{{ $transaction['carName'] }}</h3>
                <p>Return date: {{ $transaction['returnDate'] }}</p>
                <p class="text-gray-600 mt-2 font-semibold text-lg">Rp. {{ number_format($transaction['totalPrice'], 0, ',', '.') }}</p>
                <p class="text-erentGreen">&#10004; Active</p>
                <form action="{{ route('transaction-update') }}" method="POST">
                    @csrf
                    @method("PATCH")
                    <input type="number" name="id" value="{{ $transaction['id'] }}" required class="hidden">
                    <input type="number" name="car_id" value="{{ $transaction['car_id'] }}" required class="hidden">
                    <button type="submit" class="w-full mt-4 bg-erentYellow active:bg-erentYellow/15 transition duration-100 ease-in-out text-black px-4 py-2 rounded-md hover:bg-white hover:outline hover:outline-erentYellow">Set to Non-Active</button>
                </form>
            </div>
        @endforeach
    </div>
</section>