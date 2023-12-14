<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id(); // Auto-incremental primary key
            $table->string('name');
            $table->text('description')->nullable();
            $table->decimal('price', 8, 2);
            $table->integer('stock_quantity');
            $table->string('manufacturer')->nullable();
            $table->string('supplier')->nullable();
            $table->string('material')->nullable();
            $table->integer('minimum_order_quantity')->nullable();
            $table->string('image')->nullable(); // You may store image paths or use a separate table for images
            $table->timestamps(); // Created_at and updated_at columns
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
