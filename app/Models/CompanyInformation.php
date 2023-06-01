<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CompanyInformation extends Model
{
    protected $table = 'company_information';

    protected $fillable = [
        'twitter',
        'facebook',
        'instagram',
        'website',
        'opening_hours',
        'description',
        'phone_number',
        'address',
        'email',
    ];
}
