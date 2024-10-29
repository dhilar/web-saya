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
        // Memuat file helper secara manual
        $helpersPath = app_path('helpers.php');
        
        if (file_exists($helpersPath)) {
            require_once $helpersPath;
        }
    }
}
