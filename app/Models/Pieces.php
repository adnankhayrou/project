<?php

namespace App\Models;

use App\Http\Livewire\Rate;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pieces extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'images',
        'price',
        'phone',
        'status',
        'city_id',
        'diameter',
        'serial_number',
        'reference',
        'width',
        'height',
        'type',
        'load_index',
        'speed_index',
        'brand_id',
        'model_id',
        'motorization_id',
        'etat_id',
        'active',
        'new_price',
        'starts_at',
        'ends_at',
        'user_id',
        'category_id',
        'description',
    ];

    protected $casts = [
        'images' => 'array',
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function brand()
    {
        return $this->belongsTo(Brands::class);
    }

    public function model()
    {
        return $this->belongsTo(Models::class, 'model_id');
    }

    public function city()
    {
        return $this->belongsTo(Cities::class);
    }

    public function etat()
    {
        return $this->belongsTo(Etat::class);
    }

    public function motorization()
    {
        return $this->belongsTo(Motorizations::class);
    }

    public function likes()
    {
        return $this->hasMany(Like::class, 'piece_id');
    }

    public function rates()
    {
        return $this->hasMany(Rates::class, 'piece_id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    
}
