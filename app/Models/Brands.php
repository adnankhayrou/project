<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brands extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image',
    ];

    public function pieces()
    {
        return $this->hasMany(Pieces::class, 'brand_id', 'id');
    }

    public function model()
    {
        return $this->hasMany(Models::class, 'brand_id', 'id');
    }
}
