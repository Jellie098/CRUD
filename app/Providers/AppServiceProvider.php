<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
//use Faker\Generator;
//$faker->productName;

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
        //$faker = $this->app->make(Generator::class);
        //$faker->addProvider(new \Bezhanov\Faker\Provider\Commerce($faker));
    }
}
