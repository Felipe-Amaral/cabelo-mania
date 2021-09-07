<?php

namespace App\Services\Category;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;

interface CategoryServiceInterface
{
    public function getAll(): Collection;
    public function getById(int $id): Category;
    public function create(Request $request): void;
    public function edit(Request $request, int $id): void;
    public function delete(int $id): void;
}
