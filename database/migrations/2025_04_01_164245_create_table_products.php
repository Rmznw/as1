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
        Schema::create('table_products', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('restaurant_id');
            $table->foreignId('category_id');
            $table->text('description');
            $table->double('price',8,2)->nullable();
            $table->unsignedInteger('views')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_products');
    }
};
