<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'piece_id',
        'status',
        'phone',
        'first_name',
        'last_name',    
        'email',
        'address',
        'price',
        'quantity',
        'taxe',
        'total',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function pieces()
    {
        return $this->hasMany(Pieces::class);
    }

    public function checkout()
    {
        return $this->belongsTo(Checkout::class);
    }

}
