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
        Schema::create('product_variations', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_product')->nullable(false);
            $table->string('name', 100)->nullable(false);
            $table->integer('quantity')->nullable(false);
            $table->float('price')->nullable(false);
            $table->float('sale_price')->nullable();
            $table->boolean('status')->nullable(false)->default(true); //true hiện, false ẩn
            $table->date('create_date')->nullable(false);
            $table->date('update_date')->nullable();
            $table->text('image')->nullable(false);
            $table->timestamps();

            $table->foreign('id_product')->references('id')->on('products');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_variations');
    }
};