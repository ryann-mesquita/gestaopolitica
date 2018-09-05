<?php

namespace App\Providers;


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
              //  $this->registerPolicies();

      /*  Gate::define('dashboard-products', function($user, $product)
        {
            return $user->id == $product->user_id;
        });*/

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
