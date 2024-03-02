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
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id_product');
            $table->unsignedInteger('id_store')->nullable(false);
            $table->unsignedInteger('id_category')->nullable(false);
            $table->string('name', 255)->nullable(false);
            $table->text('description')->nullable(false);
            $table->boolean('status')->nullable(false)->default(true); //true hiện, false ẩn
            $table->date('create_date')->nullable(false);
            $table->date('update_date')->nullable();
            $table->text('image_arr')->nullable(false);
            $table->timestamps();

            $table->foreign('id_store')->references('id_store')->on('stores');
            $table->foreign('id_category')->references('id_category')->on('categories');
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