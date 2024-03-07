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
        Schema::create('notifications', function (Blueprint $table) {
            $table->increments('id_notification');
            $table->text('content')->nullable(false);
            $table->string('title', 255)->nullable(false);
            $table->boolean('status')->nullable(false)->default(true); //true hiện, false ẩn
            $table->text('image')->nullable();
            $table->boolean('is_user')->nullable(false)->default(true); //true là user, false là store
            $table->tinyInteger('rank_user')->nullable()->default(4); //0 đồng, 1 bạc, 2 vàng, 3 kim cương, 4 toàn bộ
            $table->date('create_date')->nullable(false);
            $table->date('update_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notifications');
    }
};