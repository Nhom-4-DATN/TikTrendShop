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
        Schema::create('comment_blog', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_blog')->nullable(false);
            $table->unsignedInteger('id_user')->nullable(false);
            $table->text('content')->nullable(false);
            $table->tinyInteger('status')->nullable(false)->default(1); //0 ẩn, 1 hiện
            $table->timestamps();

            $table->foreign('id_blog')->references('id')->on('blogs');
            $table->foreign('id_user')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comment_blog');
    }
};
