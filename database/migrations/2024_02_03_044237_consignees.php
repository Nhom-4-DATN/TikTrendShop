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
        Schema::create('consignees', function (Blueprint $table) {
            $table->increments('id_consignees');
            $table->unsignedInteger('id')->nullable(false);
            $table->string('name', 50)->nullable();
            $table->string('address', 255)->nullable();
            $table->string('phone', 13)->nullable();
            $table->boolean('is_default')->nullable(false)->default(true); //true mặc định, false không mặc định
            $table->timestamps();

            $table->foreign('id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('consignees');
    }
};