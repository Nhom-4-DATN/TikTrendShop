<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class LikesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('likes')->insert([
            [
                'id' => 1,
                'id_product' => 1,
                'id_user' => 6,
                'is_like' => true,
                'created_at' => '2024-02-23 08:10:00',
                'updated_at' => null
            ],
            [
                'id' => 2,
                'id_product' => 2,
                'id_user' => 6,
                'is_like' => true,
                'created_at' => '2024-02-23 08:10:00',
                'updated_at' => null
            ],
            [
                'id' => 3,
                'id_product' => 3,
                'id_user' => 6,
                'is_like' => true,
                'created_at' => '2024-02-23 08:10:00',
                'updated_at' => null
            ],
            [
                'id' => 4,
                'id_product' => 10,
                'id_user' => 6,
                'is_like' => true,
                'created_at' => '2024-02-23 08:10:00',
                'updated_at' => null
            ],
            [
                'id' => 5,
                'id_product' => 1,
                'id_user' => 8,
                'is_like' => true,
                'created_at' => '2024-02-23 08:10:00',
                'updated_at' => null
            ],
            [
                'id' => 6,
                'id_product' => 2,
                'id_user' => 8,
                'is_like' => true,
                'created_at' => '2024-02-23 08:10:00',
                'updated_at' => null
            ],
            [
                'id' => 7,
                'id_product' => 2,
                'id_user' => 9,
                'is_like' => true,
                'created_at' => '2024-02-23 08:10:00',
                'updated_at' => null
            ],
            [
                'id' => 8,
                'id_product' => 2,
                'id_user' => 10,
                'is_like' => true,
                'created_at' => '2024-02-23 08:10:00',
                'updated_at' => null
            ],
            [
                'id' => 9,
                'id_product' => 2,
                'id_user' => 11,
                'is_like' => true,
                'created_at' => '2024-02-23 08:10:00',
                'updated_at' => null
            ],
            [
                'id' => 10,
                'id_product' => 10,
                'id_user' => 11,
                'is_like' => true,
                'created_at' => '2024-02-23 08:10:00',
                'updated_at' => null
            ],
            [
                'id' => 11,
                'id_product' => 9,
                'id_user' => 11,
                'is_like' => true,
                'created_at' => '2024-02-23 08:10:00',
                'updated_at' => null
            ],
            [
                'id' => 12,
                'id_product' => 13,
                'id_user' => 10,
                'is_like' => true,
                'created_at' => '2024-02-23 08:10:00',
                'updated_at' => null
            ],
            [
                'id' => 13,
                'id_product' => 17,
                'id_user' => 10,
                'is_like' => true,
                'created_at' => '2024-02-23 08:10:00',
                'updated_at' => null
            ],
            [
                'id' => 14,
                'id_product' => 15,
                'id_user' => 6,
                'is_like' => true,
                'created_at' => '2024-02-23 08:10:00',
                'updated_at' => null
            ],
            [
                'id' => 15,
                'id_product' => 8,
                'id_user' => 8,
                'is_like' => true,
                'created_at' => '2024-02-23 08:10:00',
                'updated_at' => null
            ],
            [
                'id' => 16,
                'id_product' => 7,
                'id_user' => 11,
                'is_like' => true,
                'created_at' => '2024-02-23 08:10:00',
                'updated_at' => null
            ],
            [
                'id' => 17,
                'id_product' => 12,
                'id_user' => 11,
                'is_like' => true,
                'created_at' => '2024-02-23 08:10:00',
                'updated_at' => null
            ],
            [
                'id' => 18,
                'id_product' => 16,
                'id_user' => 10,
                'is_like' => true,
                'created_at' => '2024-02-23 08:10:00',
                'updated_at' => null
            ],
            [
                'id' => 19,
                'id_product' => 12,
                'id_user' => 9,
                'is_like' => true,
                'created_at' => '2024-02-23 08:10:00',
                'updated_at' => null
            ],
            [
                'id' => 20,
                'id_product' => 9,
                'id_user' => 9,
                'is_like' => true,
                'created_at' => '2024-02-23 08:10:00',
                'updated_at' => null
            ],
            [
                'id' => 21,
                'id_product' => 11,
                'id_user' => 6,
                'is_like' => true,
                'created_at' => '2024-02-23 08:10:00',
                'updated_at' => null
            ],
            [
                'id' => 22,
                'id_product' => 7,
                'id_user' => 8,
                'is_like' => true,
                'created_at' => '2024-02-23 08:10:00',
                'updated_at' => null
            ]
        ]);
    }
}
