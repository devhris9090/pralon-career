<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Degrees extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'edu_name',
        'edu_value',
    ];

    protected $table = 'sdk_edu';
}
