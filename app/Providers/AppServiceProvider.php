<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //

        view()->composer('admin.partials.sidebar', function($konfirmasi){
            $konfirmasi->with([
                'konfirmasi' => User::whereIn('role', ['cabang', 'ranting'])->where('verified', 'register')->get()
            ]);
        });

        view()->composer('cabang.partials.sidebar', function($konfirmasi){
            $konfirmasi->with([
                'konfirmasi' => User::where('role', 'ranting')->where('cabang', Auth()->user()->cabang)->where('verified', 'register')->get()
            ]);
        });
    }

    
}
