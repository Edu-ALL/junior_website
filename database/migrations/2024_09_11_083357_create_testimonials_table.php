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
        Schema::create('testimonials', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('group')->length(20)->unsigned();
            $table->string('testi_name');
            $table->text('testi_desc');
            $table->text('testi_subtitle')->nullable();
            $table->text('testi_thumbnail')->nullable();
            $table->string('testi_alt')->nullable();
            $table->enum('testi_status', ['active', 'inactive']);
            $table->char('lang', 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('testimonials');
    }
};
