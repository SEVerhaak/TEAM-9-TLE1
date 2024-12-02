<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'email',
        'phone_number',
        'logo',
        'banner_image',
        'hq_location',
        'status',
    ];

    public function users()
    {
        return $this->belongsToMany(User::class, 'user_business')
            ->withPivot('function')
            ->withTimestamps();
    }

    public function vacancy()
    {
        return $this->hasMany(Vacancy::class);
    }
}
