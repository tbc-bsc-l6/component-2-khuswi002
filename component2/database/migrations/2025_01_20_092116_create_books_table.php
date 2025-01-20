<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('author');  // Add author column
            $table->string('title');   // Add title column
            $table->integer('pages');  // Add pages column
            $table->decimal('price', 8, 2);  // Add price column
            $table->timestamps();  // Add timestamps (created_at, updated_at)
        });
    }

    public function down()
    {
        Schema::dropIfExists('books');
    }
};
