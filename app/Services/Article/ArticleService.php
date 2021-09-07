<?php

namespace App\Services\Article;

use App\Models\Article;
use App\Repositories\Article\ArticleRepositoryInterface;
use App\Services\Article\ArticleServiceInterface;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class ArticleService implements ArticleServiceInterface
{
    public function __construct(
        private ArticleRepositoryInterface $articleRepository,
    ) {}

    public function getAll(): Collection
    {
        return $this->articleRepository->getAll();
    }

    public function getById(int $id): Article
    {
        return $this->articleRepository->getById($id);
    }

    public function create(Request $request): void
    {
        $this->articleRepository->create($request);
    }

    public function edit(Request $request, int $id): void
    {
        $this->articleRepository->edit($request, $id);
    }

    public function delete(int $id): void
    {
        $this->articleRepository->delete($id);
    }
}
