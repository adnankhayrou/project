<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rates extends Model
{
    use HasFactory;

    protected $fillable = [
        'piece_id',
        'user_id',
        'rate',
    ];

    public function piece()
    {
        return $this->belongsTo(Pieces::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
