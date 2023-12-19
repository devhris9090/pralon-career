<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Applicants extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_applicant',
        'userid',
        'id_vacancy',
        'value',
        'status',
    ];

    protected $table = 'employer_applicant';

    public function vacancy() {
        return $this->belongsTo(Vacancies::class, 'id_vacancy', 'id_vacancy');
    }
}
