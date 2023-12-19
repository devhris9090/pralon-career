<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Families extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'userid',
        'familyName',
        'familyRelation',
        'DateOfBirth',
        'Job',
        'Status',
    ];

    protected $table = 'userfamily';
}
