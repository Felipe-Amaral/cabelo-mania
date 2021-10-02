<?php

namespace App\Services\Article;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;

interface ArticleServiceInterface
{
    public function getAll(): Collection;
    public function getById(int $id): Article;
    public function create(Request $request): void;
    public function edit(Request $request, int $id): void;
    public function delete(int $id): void;
    public function changeVisibility(int $articleId, bool $visible): void;
}
