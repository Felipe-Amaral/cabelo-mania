<?php

namespace App\Services\Category;

use App\Entities\CategoryEntity;
use App\Http\Resources\CategoryCollection;
use Illuminate\Http\Request;

interface CategoryServiceInterface
{
    public function getAll(): CategoryCollection;
    public function getById(int $id): CategoryEntity;
    public function create(Request $request): void;
    public function edit(Request $request, int $id): void;
    public function delete(int $id): void;
}
