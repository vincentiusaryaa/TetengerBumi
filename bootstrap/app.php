<?php

use App\Http\Middleware\HandleAppearance;
use App\Http\Middleware\HandleInertiaRequests;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Http\Middleware\AddLinkHeadersForPreloadedAssets;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->encryptCookies(except: ['appearance', 'sidebar_state']);

        $middleware->alias([
            'role' => \App\Http\Middleware\CheckRole::class,
            'roles' => \App\Http\Middleware\RoleMiddleware::class,
            'guest' => \Illuminate\Auth\Middleware\RedirectIfAuthenticated::class,
        ]);
        
        // Pastikan middleware web tidak menggunakan CheckRole secara global
        $middleware->web(append: [
            \Illuminate\Session\Middleware\StartSession::class,
            \Illuminate\View\Middleware\ShareErrorsFromSession::class,
            \Illuminate\Routing\Middleware\SubstituteBindings::class,
            HandleAppearance::class,
            HandleInertiaRequests::class,
            AddLinkHeadersForPreloadedAssets::class,
        ]);
        
        // Pastikan CORS diaktifkan untuk API
        $middleware->api(append: [
            \Laravel\Sanctum\Http\Middleware\EnsureFrontendRequestsAreStateful::class,
            \Illuminate\Routing\Middleware\ThrottleRequests::class . ':api',
            \Illuminate\Routing\Middleware\SubstituteBindings::class,
            \Illuminate\Session\Middleware\StartSession::class, // Tambahkan ini
            \Illuminate\View\Middleware\ShareErrorsFromSession::class, // Tambahkan ini
        ]);
        
        // Pastikan VerifyCsrfToken diaktifkan untuk semua rute web
        $middleware->validateCsrfTokens(except: [
            'sanctum/csrf-cookie',
            'profile/photo', // Izinkan endpoint upload foto
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
