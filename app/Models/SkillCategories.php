<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SkillCategories extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'category_name',
    ];

    protected $table = 'skillcategory';
}
