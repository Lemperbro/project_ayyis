<?php

namespace App\Providers;

use App\Models\Anggota;
use App\Repositories\ApiWilayahRepository;
use App\Repositories\CabangRepository;
use App\Repositories\Interfaces\AnggotaInterface;
use App\Repositories\Interfaces\ApiWilayahInterface;
use App\Repositories\Interfaces\CabangInterface;
use App\Repositories\Interfaces\RantingInterface;
use App\Repository\RantingRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->bind(
            RantingInterface::class,
            RantingRepository::class
        );
        $this->app->bind(
            AnggotaInterface::class,
            AnggotaRepository::class
        );
        $this->app->bind(
            ApiWilayahInterface::class,
            ApiWilayahRepository::class
        );
        $this->app->bind(
            CabangInterface::class,
            CabangRepository::class
        );
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
