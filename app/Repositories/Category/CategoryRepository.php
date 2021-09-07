<?php

namespace App\Repositories\Category;

use App\Repositories\Category\CategoryRepositoryInterface;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class CategoryRepository implements CategoryRepositoryInterface
{
    public function getAll(): Collection
    {
        try {
            return Category::all();
        } catch (\Exception) {
            throw new \Exception('Falha ao obter categoria.');
        }
    }

    public function getById(int $id): Category
    {
        try {
            return Category::findOrFail($id);
        } catch (\Exception) {
            throw new \Exception('Falha ao encontrar categoria.');
        }
    }

    public function create(Request $request): void
    {
        try {
            $category = new Category($request->all());
            $category->save();
        } catch (\Exception) {
            throw new \Exception('Falha ao inserir categoria.');
        }
    }

    public function edit(Request $request, int $id): void
    {
        try {
            $category              = Category::findOrFail($id);
            $category->name        = $request->name;
            $category->description = $request->description;

            $category->save();
        } catch (\Exception) {
            throw new \Exception('Falha ao atualizar artigo.');
        }
    }

    public function delete(int $id): void
    {
        try {
            $category = Category::findOrFail($id);
            $category->delete();
        } catch (\Exception) {
            throw new \Exception('Falha ao deletar artigo.');
        }
    }
}
