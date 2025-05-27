<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    public function handle(Request $request, Closure $next, string $role): Response
    {
        // Jika user belum login, redirect ke halaman login
        if (! $request->user()) {
            return redirect()->route('login');
        }
        
        // Jika role tidak sesuai, redirect ke home dengan pesan
        if ($request->user()->role !== $role) {
            return redirect()->route('home')
                ->with('message', 'Anda tidak memiliki akses ke halaman tersebut.');
        }

        return $next($request);
    }
}
