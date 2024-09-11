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
        Schema::create('website_settings', function (Blueprint $table) {
            $table->id();
            $table->string('website_name');
            $table->text('website_primary_logo');
            $table->string('alt_primary_logo');
            $table->bigInteger('phone_number_wa')->length(20)->unsigned();
            $table->bigInteger('phone_number_1')->length(20)->unsigned();
            $table->bigInteger('phone_number_2')->length(20)->unsigned()->nullable();
            $table->bigInteger('phone_number_3')->length(20)->unsigned()->nullable();
            $table->text('address');
            $table->text('email');
            $table->text('facebook');
            $table->text('instagram');
            $table->text('youtube_channel');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('website_settings');
    }
};
