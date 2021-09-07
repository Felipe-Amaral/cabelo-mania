<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Article extends Model
{
    use HasFactory;

    protected $table = 'article';
    protected $guarded = [];

    public function category()
    {
        return $this->hasOne(Category::class, 'id', 'category_id');
    }
}
