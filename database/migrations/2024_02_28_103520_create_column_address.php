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
        Schema::create('addresses', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_user')->nullable(false);
            $table->string('name', 50)->nullable();
            $table->string('address', 255)->nullable();
            $table->string('phone', 13)->nullable();
            $table->boolean('is_default')->nullable(false)->default(0);
            $table->boolean('return_address')->nullable(true)->default(0);
            $table->boolean('delivery_address')->nullable(true)->default(0);
            $table->timestamps();

            $table->foreign('id_user')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('addresses');
    }
};
