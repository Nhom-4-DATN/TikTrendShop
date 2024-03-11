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
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_name', 100)->nullable(false);
            $table->string('full_name', 100)->nullable(false);
            $table->string('email', 255)->nullable(false);
            $table->string('phone', 13)->nullable(false);
            $table->string('password', 100)->nullable(false);
            $table->timestamp('email_verified_at')->nullable();
            $table->tinyInteger('rank')->nullable(false)->default(0); //0 đồng, 1 bạc, 2 vàng, 3 kim cương
            $table->boolean('status')->default(false); // true hiện, false ẩn
            $table->tinyInteger('role')->nullable(false)->default(1); //0 admin, 1 user, 2 store
            $table->text('image')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
