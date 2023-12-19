<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmailConfiguration extends Model
{
    use HasFactory;

    protected $table = 'hrm_mailer';

    protected $fillable = [
        'domain',
        'port',
        'username',
        'password',
        'email',
        'smtp',
    ];
}
