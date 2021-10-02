<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Article;

class Category extends Model
{
    use HasFactory;

    protected $table = 'category';
    protected $guarded = [];

    public function articles()
    {
        return $this->belongsTo(Article::class, 'category_id', 'id');
    }
}
