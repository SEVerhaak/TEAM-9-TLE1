<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
        'login_count',
        'birth_date',
        'hour_filter',
    ];
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function businesses()
    {
        return $this->belongsToMany(Business::class, 'user_business')
            ->withPivot('function')
            ->withTimestamps();
    }

    public function vacancy()
    {
        return $this->belongsToMany(Vacancy::class, 'user_jobs')
            ->withPivot('application_stage')
            ->withTimestamps();
    }

    public function certificates()
    {
        return $this->belongsToMany(Certificate::class, 'user_certificates')
            ->withTimestamps();
    }

    public function swipes()
    {
        return $this->hasMany(UserSwipe::class);
    }
}
