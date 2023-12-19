<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $primaryKey = 'userid';


    protected $fillable = [
        'userid',
        'full_name',
        'email',
        'gender',
        'photo',
        'phone',
        'birthplace',
        'birthdate',
        'maritalstatus',
        'address',
        'city_id',
        'state_id',
        'religion',
        'idnumber',
    ];
    

    protected $table = 'teodempersonal';
}
