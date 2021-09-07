<?php

namespace App\Repositories\Article;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

interface ArticleRepositoryInterface
{
    public function getAll(): Collection;
    public function getById(int $id): Article;
    public function create(Request $request): void;
    public function edit(Request $request, int $id): void;
    public function delete(int $id): void;
}
