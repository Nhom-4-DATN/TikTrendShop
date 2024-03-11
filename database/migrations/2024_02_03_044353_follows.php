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
        Schema::create('follows', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_store')->nullable(false);
            $table->unsignedInteger('id_user')->nullable(false);
            $table->boolean('is_follow')->nullable(false)->default(true); //true hiện, false xóa
            $table->timestamps();

            $table->foreign('id_store')->references('id')->on('stores');
            $table->foreign('id_user')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('follows');
    }
};