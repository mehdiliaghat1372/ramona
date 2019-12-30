<?php

namespace App\Providers;

use App\Services\Reactions\Reactor;
use App\Services\Reactions\SessionReactor;
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
        $this->app->bind(Reactor::class, SessionReactor::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        require(__DIR__ . '/../Services/helpers.php');
    }
}
