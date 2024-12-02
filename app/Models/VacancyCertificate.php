<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VacancyCertificate extends Model
{
    use HasFactory;

    protected $fillable = [
        'vacancy_id',
        'certificate_id',
    ];

    public function vacancy()
    {
        return $this->belongsTo(Vacancy::class);
    }

    public function certificate()
    {
        return $this->belongsTo(Certificate::class);
    }
}

