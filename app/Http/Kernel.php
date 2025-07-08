<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    /**
     * Global middleware
     */
    protected $middleware =;

    /**
     * Middleware groups
     */
    protected $middlewareGroups =,

        'api' =>;

    /**
     * Route middleware (bisa digunakan per-route)
     * 
     * Catatan: Properti ini mungkin bernama $middlewareAliases di Laravel 10+
     */
    protected $routeMiddleware =;
}