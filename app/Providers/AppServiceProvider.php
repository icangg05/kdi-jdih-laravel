<?php

namespace App\Providers;

use App\Models\Pengumuman;
use App\Observers\PengumumanObserver;
use Illuminate\Pagination\Paginator;
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
        Paginator::useBootstrapThree();

        Pengumuman::observe(PengumumanObserver::class);
    }
}
