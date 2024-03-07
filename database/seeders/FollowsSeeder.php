<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class FollowsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('follows')->insert([
            [
                'id_follow' => 1,
                'id_store' => 3,
                'id' => 8,
                'is_follow' => true,
                'created_at' => '2024-02-23 08:10:00',
                'updated_at'=> null
            ],
            [
                'id_follow' => 2,
                'id_store'=> 3,
                'id' => 6,
                'is_follow' => true,
                'created_at' => '2024-02-23 08:10:00',
                'updated_at'=> null
            ],
            [
                'id_follow' => 3,
                'id_store'=> 2,
                'id' => 7,
                'is_follow' => true,
                'created_at' => '2024-02-23 08:10:00',
                'updated_at'=> null
            ],
            [
                'id_follow' => 4,
                'id_store'=> 3,
                'id' => 7,
                'is_follow' => true,
                'created_at' => '2024-02-23 08:10:00',
                'updated_at'=> null
            ],
            [
                'id_follow' => 5,
                'id_store' => 3,
                'id' => 1,
                'is_follow' => true,
                'created_at' => '2024-02-23 08:10:00',
                'updated_at'=> null
            ],
            [
                'id_follow' => 6,
                'id_store'=> 3,
                'id' => 9,
                'is_follow' => true,
                'created_at' => '2024-02-23 08:10:00',
                'updated_at'=> null
            ],
            [
                'id_follow' => 7,
                'id_store' => 3,
                'id' => 10,
                'is_follow' => true,
                'created_at' => '2024-02-23 08:10:00',
                'updated_at'=> null
            ],
            [
                'id_follow' => 8,
                'id_store'=> 2,
                'id' => 10,
                'is_follow' => true,
                'created_at' => '2024-02-23 08:10:00',
                'updated_at'=> null
            ],
            [
                'id_follow' => 9,
                'id_store'=> 2,
                'id' => 11,
                'is_follow' => true,
                'created_at' => '2024-02-23 08:10:00',
                'updated_at'=> null
            ],
            [
                'id_follow' => 10,
                'id_store'=> 3,
                'id' => 11,
                'is_follow' => true,
                'created_at' => '2024-02-23 08:10:00',
                'updated_at'=> null
            ]
        ]);
    }
}