<?php

namespace App\Repositories\Article;

use App\Repositories\Article\ArticleRepositoryInterface;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class ArticleRepository implements ArticleRepositoryInterface
{
    public function getAll(): Collection
    {
        try {
            return Article::all();
        } catch (\Exception) {
            throw new \Exception('Falha no repositório ao obter artigos.');
        }
    }

    public function getById(int $id): Article
    {
        try {
            return Article::findOrFail($id);
        } catch (\Exception) {
            throw new \Exception('Falha no repositório ao encontrar artigo.');
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
