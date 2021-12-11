<?php

namespace App\Repositories\Article;

use App\Entities\ArticleEntity;
use App\Exceptions\ArticleRepositoryGetAllException;
use App\Http\Requests\GetByIdPostRequest;
use App\Http\Resources\ArticleCollection;
use App\Repositories\Article\ArticleRepositoryInterface;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleRepository implements ArticleRepositoryInterface
{
    public function getAll(): ArticleCollection
    {
        try {
            return new ArticleCollection(Article::all());
        } catch (ArticleRepositoryGetAllException) {
            throw new ArticleRepositoryGetAllException();
        }
    }

    public function getById(int $id): ArticleEntity
    {
        try {
            return new ArticleEntity(Article::with('category')->findOrFail($id)->toArray());
        } catch (\Exception) {
            throw new \Exception('Falha no repositório ao obter artigo.');
        }
    }

    public function create(Request $request): void
    {
        $request->request->remove('files');
        $article = new Article($request->all());
        $article->save();
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
        } catch (\Exception) {
            throw new \Exception('Falha no repositório ao atualizar artigo.');
        }
    }

    public function delete(int $id): void
    {
        try {
            $article = Article::findOrFail($id);
            $article->delete();
        } catch (\Exception) {
            throw new \Exception('Falha no repositório ao deletar artigo.');
        }
    }

    public function setVisible(int $id): void
    {
        try {
            $article = Article::findOrFail($id);
            $article->visible = 1;
        } catch (\Exception) {
            throw new \Exception('Falha no repositório ao tornar artigo invisível.');
        }
    }

    public function setInvisible(int $id): void
    {
        try {
            $article = Article::findOrFail($id);
            $article->visible = 0;
        } catch (\Exception) {
            throw new \Exception('Falha no repositório ao tornar artigo visível.');
        }
    }
}
