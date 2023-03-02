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
        Schema::create('whies', function (Blueprint $table) {
            $table->id();
            $table->json('name');
            $table->json('title');
            $table->text('image');
            $table->json('why1_title');
            $table->json('why1_description')->nullable();
            $table->text('why1_icon');
            $table->json('why2_title');
            $table->json('why2_description')->nullable();
            $table->text('why2_icon');
            $table->json('why3_title');
            $table->json('why3_description')->nullable();
            $table->text('why3_icon');
            $table->json('why4_title');
            $table->json('why4_description')->nullable();
            $table->text('why4_icon');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('whys');
    }
};
