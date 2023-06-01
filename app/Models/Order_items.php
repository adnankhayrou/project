<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order_items extends Model
{
    use HasFactory;

    protected $fillable = [
        'quantity',
        'piece_id',
        'price',
        'order_id',
    ];
}
