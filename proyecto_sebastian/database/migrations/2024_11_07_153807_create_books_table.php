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

            $table->string('titul');
            $table->string("genero");
            $table->date("publicacion");

            $table->unsignedBigInteger('author_id');
            $table->foreign('author_id')->references('id')->on('autors')->onDelete('cascade');

            $table->unsignedBigInteger('editorial_id');
            $table->foreign('editorial_id')->references('id')->on("editorials")->onDelete('cascade');

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
