<?php

use App\Http\Middleware\Is_admin_middleware;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->appendToGroup('is_admin_middleware', [Is_admin_middleware::class]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
