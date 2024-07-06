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
        Schema::create('contents', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('content_category_id')->unsigned();
            $table->foreign('content_category_id')->references('id')->on('content_categories')->onUpdate('cascade')->onDelete('cascade');
            $table->index('content_category_id');
            $table->string('title')->nullable();
            $table->string('intro')->nullable();
            $table->text('content')->nullable();
            $table->tinyInteger('active')->unsigned()->default(true)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contents');
    }
};
