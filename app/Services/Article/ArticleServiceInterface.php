<?php

namespace App\Services\Article;

use App\Entities\ArticleEntity;
use App\Http\Requests\GetByIdPostRequest;
use App\Http\Requests\StoreArticlePostRequest;
use App\Http\Resources\ArticleCollection;
use Illuminate\Http\Request;

interface ArticleServiceInterface
{
    public function getAll(): ArticleCollection;
    public function getById(int $id): ArticleEntity;
    public function create(StoreArticlePostRequest $request): void;
    public function edit(Request $request, int $id): void;
    public function delete(int $id): void;
    public function changeVisibility(int $articleId): void;
}
