<?php

namespace App\Providers;

use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        if (User::all()->count() == 0)
        {
            $user = User::create([
                'firstname' => "Adonai",
                'lastname' => "Nangui",
                'email' => "admin@shopforme.com",
                'password' => Hash::make("shopforme"),
                'is_admin' => true
            ]);
        }
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
