<?php
// Run in the terminal: php artisan make:migration create_portfolios_table

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePortfoliosTable extends Migration
{
    public function up()
    {
        Schema::create('portfolios', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->json('images')->nullable();
            $table->string('category')->nullable(); // e.g., Men's, Women's, Customized
            $table->string('fabric_type')->nullable(); // e.g., Cotton, Linen, etc.
            $table->string('size')->nullable(); // e.g., Small, Medium, Large
            $table->string('color')->nullable(); // e.g., Red, Blue, Green
            $table->decimal('price', 10, 2)->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('portfolios');
    }
}
