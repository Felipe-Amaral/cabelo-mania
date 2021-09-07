<?php

namespace App\Repositories\Category;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

interface CategoryRepositoryInterface
{
    public function getAll(): Collection;
    public function getById(int $id): Category;
    public function create(Request $request): void;
    public function edit(Request $request, int $id): void;
    public function delete(int $id): void;
}
