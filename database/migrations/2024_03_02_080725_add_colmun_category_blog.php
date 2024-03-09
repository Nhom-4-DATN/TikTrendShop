<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        Schema::table('categories_blog', function (Blueprint $table) {
            $table->unsignedInteger('parent_id')->nullable()->default(0);
            $table->softDeletes();
            $table->foreign('parent_id')->references('id')->on('categories_blog')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('categories_blog', function (Blueprint $table) {
        });
    }
};
