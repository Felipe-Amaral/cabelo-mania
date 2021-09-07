<?php

namespace App\Http\Controllers;

use App\Services\Article\ArticleServiceInterface;
use App\Services\Category\CategoryServiceInterface;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class ArticleController extends Controller
{
    public function __construct(
        private ArticleServiceInterface $articleService,
        private CategoryServiceInterface $categoryService
    ) {}

    public function index(): View
    {
        return view('articles.index', ['articles' => $this->articleService->getAll()]);
    }

    public function create(): View
    {
        return view('articles.create', ['categories' => $this->categoryService->getAll()]);
    }

    public function store(Request $request): RedirectResponse
    {
        $this->articleService->create($request);
        return redirect('articles')->with('status', 'Artigo adicionada com sucesso!');
    }

    public function show(int $id): View
    {
        return view('articles.show', ['article' => $this->articleService->getById($id)]);
    }

    public function edit(int $id): View
    {
        return view('articles.edit', ['article' => $this->articleService->getById($id)]);
    }

    public function update(Request $request, int $id): RedirectResponse
    {
        $this->articleService->edit($request, $id);
        return redirect('articles')->with('status', 'Artigo editada com sucesso!');
    }

    public function destroy($id): RedirectResponse
    {
        $this->articleService->delete($id);
        return redirect('articles')->with('status', 'Artigo deletada com sucesso!');
    }
}
