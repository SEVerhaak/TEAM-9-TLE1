<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobCertificate extends Model
{
    use HasFactory;

    protected $fillable = [
        'job_id',
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

