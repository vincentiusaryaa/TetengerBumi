<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     * @param  string  ...$roles
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function handle(Request $request, Closure $next, ...$roles): Response
    {
        // Dapatkan user yang sedang login
        if (!$request->user()) {
            // Redirect ke halaman login dengan intended URL
            return redirect()->route('login');
        }

        $user = $request->user();
        
        // Jika user tidak memiliki role, beri default
        if (!isset($user->role)) {
            // Coba gunakan nilai default atau asumsi role minimal
            \Log::warning('User tanpa role mengakses halaman terproteksi: ' . $request->url());
            // Jika tidak ada role yang ditentukan, lanjutkan request
            if (empty($roles)) {
                return $next($request);
            }
            
            // Jika ada role yang dibutuhkan, redirect ke home dengan pesan
            return redirect()->route('home')->with('error', 'Anda tidak memiliki akses untuk halaman tersebut.');
        }

        // Jika tidak ada role yang ditentukan, lanjutkan request
        if (empty($roles)) {
            return $next($request);
        }

        // Periksa apakah role user ada dalam daftar role yang diizinkan
        if (!in_array($user->role, $roles)) {
            \Log::warning('User dengan role ' . $user->role . ' mencoba akses halaman yang membutuhkan role: ' . implode(',', $roles));
            return redirect()->route('home')->with('error', 'Anda tidak memiliki akses untuk halaman tersebut.');
        }

        // Jika semua pengecekan lolos, lanjutkan request
        return $next($request);
    }
}
