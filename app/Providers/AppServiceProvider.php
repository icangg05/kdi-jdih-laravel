<?php

namespace App\Providers;

use App\Models\DataLampiran;
use App\Models\Document;
use App\Models\Pengumuman;
use App\Observers\DataLampiranObserver;
use App\Observers\DocumentObserver;
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
        Document::observe(DocumentObserver::class);
        DataLampiran::observe(DataLampiranObserver::class);
    }
}
