<?php

namespace App\Services\Category;

use App\Entities\CategoryEntity;
use App\Http\Resources\CategoryCollection;
use App\Repositories\Category\CategoryRepositoryInterface;
use App\Services\Category\CategoryServiceInterface;
use Illuminate\Http\Request;

class CategoryService implements CategoryServiceInterface
{
    public function __construct(
        private CategoryRepositoryInterface $categoryRepository,
    ) {
    }

    public function getAll(): CategoryCollection
    {
        return $this->categoryRepository->getAll();
    }

    public function getById(int $id): CategoryEntity
    {
        return $this->categoryRepository->getById($id);
    }

    public function create(Request $request): void
    {
        $this->categoryRepository->create($request);
    }

    public function edit(Request $request, int $id): void
    {
        $this->categoryRepository->edit($request, $id);
    }

    public function delete(int $id): void
    {
        $this->categoryRepository->delete($id);
    }
}
