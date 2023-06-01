<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Motorizations extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function pieces()
    {
        return $this->hasMany(Pieces::class);
    }

}

