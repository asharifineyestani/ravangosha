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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description')->nullable();
            $table->string('book_image_url')->nullable();
            $table->foreignId('author_id')->constrained();
            $table->string('translator');
            $table->string('publication');
            $table->string('isbn')->nullable();
            $table->string('cover_type')->nullable();
            $table->string('size')->nullable();
            $table->integer('page_count')->nullable();
            $table->string('print_number')->nullable();
            $table->string('publish_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
