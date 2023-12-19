<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactInformation extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_name_id',
        'address',
        'phone',
        'email',
        'copyright',
        'linkedin',
        'youtube',
        'instagram',
        'facebook'
    ];

    protected $table = 'companyinfo';
}
