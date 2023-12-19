<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Educations extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'userid',
        'institutionName',
        'degree',
        'major',
        'startYear',
        'endYear',
        'achievement',
        'value',
    ];

    protected $table = 'usereducation';
}
