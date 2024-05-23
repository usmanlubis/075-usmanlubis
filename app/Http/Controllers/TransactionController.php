<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransactionController extends Controller
{

    public array $transactions = [
            [
                "id" => 1,
                "userId" => 4,
                "carName" => "Honda BRV",
                "carImage" => "https://i.postimg.cc/Xqm60y93/daihatsu-xenia.png",
                "returnDate" => "31-05-2024",
                "totalPrice" => 700000,
                "isActive" => true,
            ],
            [
                "id" => 2,
                "userId" => 4,
                "carName" => "BMW F30",
                "carImage" => "https://i.postimg.cc/q7kYSGWy/bmw-f30.png",
                "returnDate" => "31-05-2024",
                "totalPrice" => 4500000,
                "isActive" => true,
            ]
        ];

    public function index() {
        return view('transaction', [
            "transactions" => $this->transactions
        ]);
    }
}
