<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experiences extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'userid',
        'companyName',
        'companyAddress',
        'yosStart',
        'yosEnd',
        'posStart',
        'posEnd',
        'jobDesc',
        'project',
        'salaryStart',
        'salaryEnd',
        'benefit',
        'leavingReason',

    ];

    protected $primaryKey = 'id';


    protected $table = 'userexperience';

    public function user()
    {
        return $this->belongsTo(User::class, 'userid');
    }
}
