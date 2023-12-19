<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrainingAchievements extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'userid',
        'trachName',
        'trachOrganizer',
        'trachCategory',
        'trachDetail',
        'trachStart',
        'trachEnd',
    ];

    protected $table = 'userTrainingAchievement';
}
