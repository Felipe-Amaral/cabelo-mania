<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Services\Article\ArticleServiceInterface;
use App\Services\Article\ArticleServiceFactory;
use App\Repositories\Article\ArticleRepositoryInterface;
use App\Repositories\Article\ArticleRepositoryFactory;

class ArticleServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->bind(
            ArticleServiceInterface::class,
            function () {
                return (new ArticleServiceFactory())();
            }
        );

        $this->app->bind(
            ArticleRepositoryInterface::class,
            function () {
                return (new ArticleRepositoryFactory())();
            }
        );
    }

    public function boot(): void
    {
        //
    }
}
