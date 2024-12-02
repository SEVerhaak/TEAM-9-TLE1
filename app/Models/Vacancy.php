<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vacancy extends Model
{
    use HasFactory;

    protected $fillable = [
        'business_id',
        'name',
        'description',
        'salary',
        'time_hours',
        'image',
    ];

    public function business()
    {
        return $this->belongsTo(Business::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'user_vacancies')
            ->withPivot('application_stage')
            ->withTimestamps();
    }

    public function certificates()
    {
        return $this->belongsToMany(Certificate::class, 'vacancy_certificates')
            ->withTimestamps();
    }

    public function swipes()
    {
        return $this->hasMany(UserSwipe::class);
    }
}
