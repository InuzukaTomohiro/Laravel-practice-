<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\RollableDice;
use App\InjectTest\Dice;
use App;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
      $this->app->singleton(RollableDice::class, function ($app) {
        if (App::environment('testing')) {
            return new LoadedDice();
        }
        return new Dice();
    });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
