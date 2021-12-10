<?php

namespace App\Repositories\Article;

use App\Entities\ArticleEntity;
use App\Http\Resources\ArticleCollection;
use Illuminate\Http\Request;

interface ArticleRepositoryInterface
{
    public function getAll(): ArticleCollection;
    public function getById(int $id): ArticleEntity;
    public function create(Request $request): void;
    public function edit(Request $request, int $id): void;
    public function delete(int $id): void;
    public function setVisible(int $id): void;
    public function setInvisible(int $id): void;
}
