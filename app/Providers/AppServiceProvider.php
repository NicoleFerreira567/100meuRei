<?php

namespace App\Providers;

use Illuminate\Database\Eloquent\Relations\Relation;
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
        Relation::morphMap([
         'cliente'   => 'App\Models\Cliente',
         /*Muito importante para conseguir chegar nas classes */
         'funcionario' => 'App\Models\Funcionarios',
        ]);
    }
}
