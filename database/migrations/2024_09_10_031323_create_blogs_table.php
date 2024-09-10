<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->text('slug');
            $table->foreignId('cat_id')->constrained(
                table: 'blog_categories', indexName: 'blogs_cat_id'
            )->onUpdate('cascade')->onDelete('cascade');
            $table->string('blog_title');
            $table->text('blog_description')->nullable();
            $table->text('blog_thumbnail');
            $table->string('blog_thumbnail_alt');
            $table->enum('blog_status', ['draft', 'publish']);
            $table->text('seo_title');
            $table->text('seo_keyword');
            $table->text('seo_desc');
            $table->char('lang', 2);
            $table->integer('click_count');
            $table->integer('duration_read');
            $table->enum('is_highlight', ['true', 'false']);
            $table->date('publish_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
