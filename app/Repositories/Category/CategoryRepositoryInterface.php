<?php

namespace App\Repositories\Category;

use App\Entities\CategoryEntity;
use App\Http\Resources\CategoryCollection;
use Illuminate\Http\Request;

interface CategoryRepositoryInterface
{
    public function getAll(): CategoryCollection;
    public function getById(int $id): CategoryEntity;
    public function create(Request $request): void;
    public function edit(Request $request, int $id): void;
    public function delete(int $id): void;
}
