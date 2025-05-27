<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
        'profile_photo',
    ];

    public function getProfilePhotoUrlAttribute()
    {
        return $this->profile_photo
            ? asset('storage/profile_photos/' . $this->profile_photo)
            : asset('images/default-profile.png');
    }
}
