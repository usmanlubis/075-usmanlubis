<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransactionController extends Controller
{

    public $transactions = [];

    public function __construct() {
        $this->transactions = [
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
    }
    
    // update transaction
    public function updateTransaction(int $id) {
        foreach ($this->transactions as &$transaction) {
            if ($transaction['id'] == $id) {
                $transaction['isActive'] = false;
            }
        }
    }
    //end of update transaction

    public function index() {
        $selectedTransactions = [];
        foreach ($this->transactions as $transaction) {
            if ($transaction['isActive']) {
                $selectedTransactions[] = $transaction;
            }
        }

        return view('transaction', [
            "transactions" => $selectedTransactions
        ]);
    }

    public function update(Request $request) {
        $id = $request['id'];

        $this->updateTransaction ($id);
        return $id;
        // return reditect()->route('transaction');
    }
}
