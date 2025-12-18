<?php

namespace App\Providers;

use App\Repositories\CategoriaInterface;
use App\Repositories\CategoriaRepository;
use App\Repositories\ProductoInterface;
use App\Repositories\ProductoRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(
        ProductoInterface::class,
        ProductoRepository::class
    );

    $this->app->bind(
        CategoriaInterface::class,
        CategoriaRepository::class
    );
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
