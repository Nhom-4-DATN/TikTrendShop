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
                'id_like' => 1,
                'id_product' => 1,
                'id' => 6,
                'is_like' => true,
                'created_at' => '2024-02-23 08:10:00',
                'updated_at'=> null
            ],
            [
                'id_like' => 2,
                'id_product' => 2,
                'id' => 6,
                'is_like' => true,
                'created_at' => '2024-02-23 08:10:00',
                'updated_at'=> null
            ],
            [
                'id_like' => 3,
                'id_product' => 3,
                'id' => 6,
                'is_like' => true,
                'created_at' => '2024-02-23 08:10:00',
                'updated_at'=> null
            ],
            [
                'id_like' => 4,
                'id_product' => 10,
                'id' => 6,
                'is_like' => true,
                'created_at' => '2024-02-23 08:10:00',
                'updated_at'=> null
            ],
            [
                'id_like' => 5,
                'id_product' => 1,
                'id' => 8,
                'is_like' => true,
                'created_at' => '2024-02-23 08:10:00',
                'updated_at'=> null
            ],
            [
                'id_like' => 6,
                'id_product' => 2,
                'id' => 8,
                'is_like' => true,
                'created_at' => '2024-02-23 08:10:00',
                'updated_at'=> null
            ],
            [
                'id_like' => 7,
                'id_product' => 2,
                'id' => 9,
                'is_like' => true,
                'created_at' => '2024-02-23 08:10:00',
                'updated_at'=> null
            ],
            [
                'id_like' => 8,
                'id_product' => 2,
                'id' => 10,
                'is_like' => true,
                'created_at' => '2024-02-23 08:10:00',
                'updated_at'=> null
            ],
            [
                'id_like' => 9,
                'id_product' => 2,
                'id' => 11,
                'is_like' => true,
                'created_at' => '2024-02-23 08:10:00',
                'updated_at'=> null
            ],
            [
                'id_like' => 10,
                'id_product' => 10,
                'id' => 11,
                'is_like' => true,
                'created_at' => '2024-02-23 08:10:00',
                'updated_at'=> null
            ],
            [
                'id_like' => 11,
                'id_product' => 9,
                'id' => 11,
                'is_like' => true,
                'created_at' => '2024-02-23 08:10:00',
                'updated_at'=> null
            ],
            [
                'id_like' => 12,
                'id_product' => 13,
                'id' => 10,
                'is_like' => true,
                'created_at' => '2024-02-23 08:10:00',
                'updated_at'=> null
            ],
            [
                'id_like' => 13,
                'id_product' => 17,
                'id' => 10,
                'is_like' => true,
                'created_at' => '2024-02-23 08:10:00',
                'updated_at'=> null
            ],
            [
                'id_like' => 14,
                'id_product' => 15,
                'id' => 6,
                'is_like' => true,
                'created_at' => '2024-02-23 08:10:00',
                'updated_at'=> null
            ],
            [
                'id_like' => 15,
                'id_product' => 8,
                'id' => 8,
                'is_like' => true,
                'created_at' => '2024-02-23 08:10:00',
                'updated_at'=> null
            ],
            [
                'id_like' => 16,
                'id_product' => 7,
                'id' => 11,
                'is_like' => true,
                'created_at' => '2024-02-23 08:10:00',
                'updated_at'=> null
            ],
            [
                'id_like' => 17,
                'id_product' => 12,
                'id' => 11,
                'is_like' => true,
                'created_at' => '2024-02-23 08:10:00',
                'updated_at'=> null
            ],
            [
                'id_like' => 18,
                'id_product' => 16,
                'id' => 10,
                'is_like' => true,
                'created_at' => '2024-02-23 08:10:00',
                'updated_at'=> null
            ],
            [
                'id_like' => 19,
                'id_product' => 12,
                'id' => 9,
                'is_like' => true,
                'created_at' => '2024-02-23 08:10:00',
                'updated_at'=> null
            ],
            [
                'id_like' => 20,
                'id_product' => 9,
                'id' => 9,
                'is_like' => true,
                'created_at' => '2024-02-23 08:10:00',
                'updated_at'=> null
            ],
            [
                'id_like' => 21,
                'id_product' => 11,
                'id' => 6,
                'is_like' => true,
                'created_at' => '2024-02-23 08:10:00',
                'updated_at'=> null
            ],
            [
                'id_like' => 22,
                'id_product' => 7,
                'id' => 8,
                'is_like' => true,
                'created_at' => '2024-02-23 08:10:00',
                'updated_at'=> null
            ]
        ]);
    }
}