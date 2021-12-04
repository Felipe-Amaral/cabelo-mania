<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreArticlePostRequest;
use App\Http\Requests\UpdateArticlePutRequest;
use App\Services\Article\ArticleServiceInterface;
use App\Services\Category\CategoryServiceInterface;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class ArticleController extends Controller
{
    public function __construct(
        private ArticleServiceInterface $articleService,
        private CategoryServiceInterface $categoryService
    ) {}

    public function index(): View
    {
        return view('admin::articles.index', ['articles' => $this->articleService->getAll()]);
    }

    public function create(): View
    {
        return view('admin::articles.create', ['categories' => $this->categoryService->getAll()]);
    }

    public function store(StoreArticlePostRequest $request): RedirectResponse
    {
        $this->articleService->create($request);
        return redirect('admin::articles')->with('status', 'Artigo adicionada com sucesso!');
    }

    public function show(int $id): View
    {
        return view('admin::articles.show', ['article' => $this->articleService->getById($id)]);
    }

    public function edit(int $id): View
    {
        return view('admin::articles.edit', [
            'article'    => $this->articleService->getById($id),
            'categories' => $this->categoryService->getAll()
        ]);
    }

    public function update(UpdateArticlePutRequest $request, int $id): RedirectResponse
    {
        $this->articleService->edit($request, $id);
        return redirect('admin::articles')->with('status', 'Artigo editada com sucesso!');
    }

    public function destroy(int $id): RedirectResponse
    {
        $this->articleService->delete($id);
        return redirect('admin::articles')->with('status', 'Artigo deletada com sucesso!');
    }

    public function setVisible()
    {

    }

    public function setInvisible()
    {

    }
}
