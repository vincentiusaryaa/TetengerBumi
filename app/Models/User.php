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
        if (empty($this->profile_photo)) {
            return asset('images/default-avatar.png');
        }
        
        // Jika path sudah berisi 'profile_photos/', tidak perlu menambahkannya lagi
        if (strpos($this->profile_photo, 'profile_photos/') === 0) {
            return asset('storage/' . $this->profile_photo);
        }
        
        return asset('storage/profile_photos/' . $this->profile_photo);
    }
}
