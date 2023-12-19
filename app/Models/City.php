<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    protected $fillable = [
        'city_id',
        'state_id',
        'country_id',
        'city_name',
        'status',
    ];

    protected $table = 'tgemcity';
}
