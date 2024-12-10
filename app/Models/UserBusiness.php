<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserBusiness extends Model
{
    use HasFactory;

    //Define de naam van user_business table omdat het anders het meervoud pakt omdat
    //het laravel woordenboek deze niet goed oppakt. (maakt er user_businesses) van
    protected $table = 'user_business';

    protected $fillable = [
        'user_id',
        'business_id',
        'function',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function business()
    {
        return $this->belongsTo(Business::class);
    }
}

