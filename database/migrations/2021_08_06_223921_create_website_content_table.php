<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWebsiteContentTable extends Migration
{
    public function up(): void
    {
        Schema::create('website_content', function (Blueprint $table) {
            $table->id();
            $table->string('menu_name');
            $table->string('content');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('website_content');
    }
}
