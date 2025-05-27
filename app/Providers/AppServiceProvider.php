<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Share global auth.user ke semua halaman Inertia
        \Inertia\Inertia::share([
            'auth' => function () {
                return [
                    'user' => \Illuminate\Support\Facades\Auth::user(),
                ];
            },
        ]);
    }
}
