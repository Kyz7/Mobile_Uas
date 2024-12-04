<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->decimal('price', 12, 2);
            $table->text('short_description');
            $table->longText('long_description');
            $table->string('main_image');
            $table->string('image2')->nullable();
            $table->string('image3')->nullable();
            $table->bigInteger('category_id')->unsigned(); // Tanpa foreign key sementara
            $table->boolean('is_free_shipping')->default(false);
            $table->foreignId('created_by')->constrained('users');
            $table->foreignId('updated_by')->constrained('users');
            $table->timestamps();
        });
        
        Schema::table('products', function (Blueprint $table) {
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
        });        
    }

    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
