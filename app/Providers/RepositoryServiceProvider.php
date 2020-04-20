<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // Repositories
        $this->app->bind(\App\Repositories\UserRepository::class, \App\Repositories\UserRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\UfRepository::class, \App\Repositories\UfRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\CidadesRepository::class, \App\Repositories\CidadesRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\CotacoesRepository::class, \App\Repositories\CotacoesRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\EnderecosRepository::class, \App\Repositories\EnderecosRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\CoberturasRepository::class, \App\Repositories\CoberturasRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\CoberturasUserRepository::class, \App\Repositories\CoberturasUserRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\ParcelasRepository::class, \App\Repositories\ParcelasRepositoryEloquent::class);





        //Service
        $this->app->bind(\App\Services\UserService::class, \App\Services\UserServiceImpl::class);
        $this->app->bind(\App\Services\UfService::class, \App\Services\UfServiceImpl::class);
        $this->app->bind(\App\Services\AuxiliaresService::class, \App\Services\AuxiliaresServiceImpl::class);
        $this->app->bind(\App\Services\CorretorService::class, \App\Services\CorretorServiceImpl::class);
        $this->app->bind(\App\Services\CoberturasService::class, \App\Services\CoberturasServiceImpl::class);
        $this->app->bind(\App\Services\EventosService::class, \App\Services\EventosServiceImpl::class);
        //:end-bindings:
    }
}
