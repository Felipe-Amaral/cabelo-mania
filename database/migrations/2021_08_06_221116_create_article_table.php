<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticleTable extends Migration
{
    public function up(): void
    {
        Schema::create('article', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable(false);
            $table->boolean('visible')->nullable(false)->default(0);
            $table->foreignId('category_id')->nullable()->index();
            $table->string('seo_description')->nullable();
            $table->longText('content')->nullable(false);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('article');
    }
}
