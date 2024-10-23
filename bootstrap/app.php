<?php

use App\Http\Middleware\RoleUsuario;
use Illuminate\Foundation\Application;
use Illuminate\Console\Scheduling\Schedule; // Cambia aquí
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withSchedule(function (Schedule $schedule) { 
        $schedule->command('app:reabastecimiento-automatico')->everyMinute(); 
    })
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias([
            'role.admin' => RoleUsuario::class
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
