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
        Schema::create('discounts', function (Blueprint $table) {
            $table->increments('id_discount');
            $table->string('name', 100)->nullable(false);
            $table->integer('quantity')->nullable(false);
            $table->string('code', 100)->nullable(false);
            $table->float('discount_value')->nullable(false);
            $table->boolean('is_percent')->nullable(false)->default(true); //true là phần trăm, false là số
            $table->date('start_date')->nullable(false);
            $table->date('end_date')->nullable(false);
            $table->text('appplicable_products')->nullable(false);
            $table->text('appplicable_categories')->nullable(false);
            $table->float('min_order_value')->nullable(false);
            $table->float('maximum_distance')->nullable(false);
            $table->tinyInteger('user_rank')->nullable(false)->default(0); //0 đồng, 1 bạc, 2 vàng, 3 kim cương, 4 toàn bộ
            $table->text('other_conditions')->nullable();
            $table->boolean('status')->nullable(false)->default(true); //true hiện, false ẩn
            $table->boolean('is_stores')->nullable(false)->default(true); //true là của store, false là mã của admin
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('discounts');
    }
};