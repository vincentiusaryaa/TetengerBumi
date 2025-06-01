<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    protected $except = [
        'api/*', // Exclude all API routes from CSRF verification
        '/api/profile',
        '/api/profile-demo',
        '/profile/photo' // Tambahkan endpoint upload foto profil
    ];
}
