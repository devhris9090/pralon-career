<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vacancies extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_vacancy',
        'vacancy_name',
        'company_name',
        'banner',
        'status',
    ];

    protected $primaryKey = 'id_vacancy'; // Specify the custom primary key column name
    public $incrementing = false; // Indicate that the primary key is not auto-incrementing
    protected $keyType = 'string';

    protected $table = 'company_vacancy';
}
