<?php

namespace App\Services\Category;

use App\Repositories\Category\CategoryRepositoryInterface;
use App\Services\Category\CategoryService;

class CategoryServiceFactory
{
    public function __invoke(): CategoryService
    {
        $categoryRepository = app(CategoryRepositoryInterface::class);

        return new CategoryService(
            $categoryRepository
        );
    }
}
