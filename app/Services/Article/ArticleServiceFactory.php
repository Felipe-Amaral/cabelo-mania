<?php

namespace App\Services\Article;

use App\Repositories\Article\ArticleRepositoryInterface;
use App\Services\Article\ArticleService;

class ArticleServiceFactory
{
    public function __invoke(): ArticleService
    {
        $ArticleRepository = app(ArticleRepositoryInterface::class);

        return new ArticleService(
            $ArticleRepository
        );
    }
}
