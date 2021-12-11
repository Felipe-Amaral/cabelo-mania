<?php

namespace App\Services\Article;

use App\Entities\ArticleEntity;
use App\Http\Requests\StoreArticlePostRequest;
use App\Http\Resources\ArticleCollection;
use App\Repositories\Article\ArticleRepositoryInterface;
use App\Services\Article\ArticleServiceInterface;
use Illuminate\Http\Request;

class ArticleService implements ArticleServiceInterface
{
    public function __construct(
        private ArticleRepositoryInterface $articleRepository
    ) {
    }

    public function getAll(): ArticleCollection
    {
        return $this->articleRepository->getAll();
    }

    public function getById(int $id): ArticleEntity
    {
        return $this->articleRepository->getById($id);
    }

    public function create(StoreArticlePostRequest $request): void
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

    public function changeVisibility(int $articleId): void
    {
        $article = $this->getById($articleId);
        dd($article);
    }
}
