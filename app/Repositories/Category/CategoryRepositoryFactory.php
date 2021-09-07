<?php

namespace App\Repositories\Category;

class CategoryRepositoryFactory
{
    public function __invoke(): CategoryRepositoryInterface
    {
        return new CategoryRepository();
    }
}
