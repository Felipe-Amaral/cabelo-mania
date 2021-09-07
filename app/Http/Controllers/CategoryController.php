<?php

namespace App\Http\Controllers;

use App\Services\Category\CategoryServiceInterface;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class CategoryController extends Controller
{
    public function __construct(private CategoryServiceInterface $categoryService) {}

    public function index(): View
    {
        return view('categories.index', ['categories' => $this->categoryService->getAll()]);
    }

    public function create(): View
    {
        return view('categories.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $this->categoryService->create($request);
        return redirect('categories')->with('status', 'Categoria adicionada com sucesso!');
    }

    public function show(int $id): View
    {
        return view('categories.show', ['category' => $this->categoryService->getById($id)]);
    }

    public function edit(int $id): View
    {
        return view('categories.edit', ['category' => $this->categoryService->getById($id)]);
    }

    public function update(Request $request, int $id): RedirectResponse
    {
        $this->categoryService->edit($request, $id);
        return redirect('categories')->with('status', 'Categoria editada com sucesso!');
    }

    public function destroy($id): RedirectResponse
    {
        $this->categoryService->delete($id);
        return redirect('categories')->with('status', 'Categoria deletada com sucesso!');
    }
}
