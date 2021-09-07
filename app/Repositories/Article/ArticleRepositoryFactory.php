<?php

namespace App\Repositories\Article;

class ArticleRepositoryFactory
{
    public function __invoke(): ArticleRepositoryInterface
    {
        return new ArticleRepository();
    }
}
