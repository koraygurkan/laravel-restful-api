<?php

namespace App\Providers;

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
        //Data anahatarı gelmez, verileri doğrudan çekeriz.
        //ek kolonların olduğu isteklerde yine data gelir. 
        //Resource::withoutWrapping();
    }
}
