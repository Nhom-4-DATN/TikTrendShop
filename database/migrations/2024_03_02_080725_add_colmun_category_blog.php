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
        Schema::table('categories_blog', function (Blueprint $table) {
            // Kiểm tra xem cột đã tồn tại hay chưa
            if (!Schema::hasColumn('categories_blog', 'parent_id')) {
                // Thêm cột `parent_id`
                $table->unsignedInteger('parent_id')->nullable()->default(0);

                // Thêm khóa ngoại và thiết lập onDelete('cascade') nếu cần thiết
                $table->foreign('parent_id')->references('id')->on('categories_blog')->onDelete('cascade');
            }

            // Kiểm tra xem cột `deleted_at` đã tồn tại hay chưa
            if (!Schema::hasColumn('categories_blog', 'deleted_at')) {
                // Thêm cột `deleted_at`
                $table->softDeletes();
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('categories_blog', function (Blueprint $table) {
            // Rollback the changes if needed
            $table->dropColumn(['parent_id', 'deleted_at']);
        });
    }
};