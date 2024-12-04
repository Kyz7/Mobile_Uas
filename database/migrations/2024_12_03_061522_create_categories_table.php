<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id(); // ini adalah big integer unsigned secara default
            $table->string('name');
            $table->string('icon');
            $table->string('slug');
            $table->timestamps();
        });        
    }

    public function down(): void
    {
         // Menambahkan foreign key untuk category_id
         Schema::table('products', function (Blueprint $table) {
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
        });
    }
};
