<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    protected $fillable = [
        'carName', 'carImage', 'startDate', 'returnDate', 'totalPrice', 'isActive', 'car_id', 'renter_id'
    ];
}
