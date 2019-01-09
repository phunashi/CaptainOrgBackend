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
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'App\DataAccessLayer\Repositories\Banner\BannerRepositoryInterface',
            'App\DataAccessLayer\Repositories\Banner\BannerRepository'
        );
        $this->app->bind(
            'App\DataAccessLayer\Repositories\Banner\BannerDescriptionRepositoryInterface',
            'App\DataAccessLayer\Repositories\Banner\BannerDescriptionRepository'
        );
        $this->app->bind(
            'App\DataAccessLayer\Repositories\Attributes\AttributeRepositoryInterface',
            'App\DataAccessLayer\Repositories\Attributes\AttributeRepository'
        );
        $this->app->bind(
            'App\DataAccessLayer\Repositories\Category\CategoryRepositoryInterface',
            'App\DataAccessLayer\Repositories\Category\CategoryRepository'
        );
        $this->app->bind(
            'App\DataAccessLayer\Repositories\Product\ProductRepositoryInterface',
            'App\DataAccessLayer\Repositories\Product\ProductRepository'
        );
    }
}
