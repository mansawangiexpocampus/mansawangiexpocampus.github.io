<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL; // <--- JANGAN LUPA IMPORT INI

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        // Tambahkan baris ini agar semua asset (CSS/JS/Gambar) dipaksa HTTPS
        if($this->app->environment('production') || $this->app->environment('local')) {
            URL::forceScheme('https');
        }
    }
}