<?php

namespace App\Http\Resources;

use App\Entities\CategoryEntity;
use Illuminate\Support\Collection;

class CategoryCollection extends Collection
{
    public function toArray()
    {
        return $this->map(function ($value) {
            return (new CategoryEntity((array)$value))->toArray();
            return $value;
        })->all();
    }
}
