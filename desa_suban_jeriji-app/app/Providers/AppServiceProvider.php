<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\User;
use App\Models\Ktp;
use Illuminate\Support\Facades\Gate;

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
        Gate::define('admin', function(User $user){
            return $user->name === 'IsAdmin';
        });
        
        Gate::define('verifktp', function(User $user){
            return $user->profile->ktp->status === 'sukses';
        });

        Gate::define('not', function(User $user){
            return $user->profile->ktp->status === null;
        });

        Gate::define('kepala', function(User $user){
            return $user->name === 'Kepala';
        });
    }
}
