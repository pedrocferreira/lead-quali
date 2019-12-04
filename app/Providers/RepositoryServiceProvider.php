<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(\App\Repositories\UserRepository::class, \App\Repositories\UserRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\EmpresaRepository::class, \App\Repositories\EmpresaRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\LeadRepository::class, \App\Repositories\LeadRepositoryEloquent::class);
        //:end-bindings:
    }
}
