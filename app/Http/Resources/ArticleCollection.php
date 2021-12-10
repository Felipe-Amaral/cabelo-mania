<?php

namespace App\Http\Resources;

use App\Entities\ArticleEntity;
use Illuminate\Support\Collection;

class ArticleCollection extends Collection
{
    public function toArray()
    {
        return $this->map(function ($value) {
            return (new ArticleEntity((array)$value))->toArray();
            return $value;
        })->all();
    }
}
