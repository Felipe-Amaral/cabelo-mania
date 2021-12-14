<?php

namespace App\Repositories\Article;

use App\Entities\ArticleEntity;
use App\Exceptions\Article\Repository\ArticleRepositoryCreateException;
use App\Exceptions\Article\Repository\ArticleRepositoryDeleteException;
use App\Exceptions\Article\Repository\ArticleRepositoryEditException;
use App\Exceptions\Article\Repository\ArticleRepositoryGetAllException;
use App\Exceptions\Article\Repository\ArticleRepositoryGetByIdException;
use App\Http\Resources\ArticleCollection;
use App\Repositories\Article\ArticleRepositoryInterface;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ArticleRepository implements ArticleRepositoryInterface
{
    public function getAll(): ArticleCollection
    {
        try {
            return new ArticleCollection(Article::all());
        } catch (ArticleRepositoryGetAllException $e) {
            Log::error("message: " . $e->getMessage());
            throw new ArticleRepositoryGetAllException();
        }
    }

    public function getById(int $id): ArticleEntity
    {
        try {
            return new ArticleEntity(Article::with('category')->findOrFail($id)->toArray());
        } catch (ArticleRepositoryGetByIdException $e) {
            Log::error("message: " . $e->getMessage());
            throw new ArticleRepositoryGetByIdException();
        }
    }

    public function create(Request $request): void
    {
        try {
            $request->request->remove('files');
            $article = new Article($request->all());
            $article->save();
        } catch (ArticleRepositoryCreateException $e) {
            Log::error("message: " . $e->getMessage());
            throw new ArticleRepositoryCreateException();
        }
    }

    public function edit(Request $request, int $id): void
    {
        try {
            $article                  = Article::findOrFail($id);

            $article->title           = $request->title;
            $article->visible         = $request->visible;
            $article->category_id     = $request->category_id;
            $article->seo_description = $request->seo_description;
            $article->content         = $request->content;

            $article->save();
        } catch (ArticleRepositoryEditException $e) {
            Log::error("message: " . $e->getMessage());
            throw new ArticleRepositoryEditException();
        }
    }

    public function delete(int $id): void
    {
        try {
            $article = Article::findOrFail($id);
            $article->delete();
        } catch (ArticleRepositoryDeleteException $e) {
            Log::error("message: " . $e->getMessage());
            throw new ArticleRepositoryDeleteException();
        }
    }
}
