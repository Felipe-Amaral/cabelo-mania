<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Services\Category\CategoryServiceInterface;
use App\Services\Category\CategoryServiceFactory;
use App\Repositories\Category\CategoryRepositoryInterface;
use App\Repositories\Category\CategoryRepositoryFactory;

class CategoryServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->bind(
            CategoryServiceInterface::class,
            function () {
                return (new CategoryServiceFactory())();
            }
        );

        $this->app->bind(
            CategoryRepositoryInterface::class,
            function () {
                return (new CategoryRepositoryFactory())();
            }
        );
    }

    public function boot(): void
    {
        //
    }
}
