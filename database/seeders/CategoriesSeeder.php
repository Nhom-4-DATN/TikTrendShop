<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            [
                'id' => 1,
                'id_parent' => 0,
                'name' => 'Thời trang',
                'description' => null,
                'status' => true,
                'created_at' => '2024-02-23 08:10:00',
                'updated_at'=> null
            ],
            [
                'id' => 2,
                'id_parent' => 1,
                'name' => 'Quần',
                'description' => null,
                'status' => true,
                'created_at' => '2024-02-23 08:10:00',
                'updated_at'=> null
            ],
            [
                'id' => 3,
                'id_parent' => 1,
                'name' => 'Áo',
                'description' => null,
                'status' => true,
                'created_at' => '2024-02-23 08:10:00',
                'updated_at'=> null
            ],
            [
                'id' => 4,
                'id_parent' => 0,
                'name' => 'Điện tử',
                'description' => null,
                'status' => true,
                'created_at' => '2024-02-23 08:10:00',
                'updated_at'=> null
            ],
            [
                'id' => 5,
                'id_parent' => 1,
                'name' => 'Máy tính',
                'description' => null,
                'status' => true,
                'created_at' => '2024-02-23 08:10:00',
                'updated_at'=> null
            ],
            [
                'id' => 6,
                'id_parent' => 1,
                'name' => 'Laptop',
                'description' => null,
                'status' => true,
                'created_at' => '2024-02-23 08:10:00',
                'updated_at'=> null
            ],
            [
                'id' => 7,
                'id_parent' => 0,
                'name' => 'Làm đẹp',
                'description' => null,
                'status' => true,
                'created_at' => '2024-02-23 08:10:00',
                'updated_at'=> null
            ],
            [
                'id' => 8,
                'id_parent' => 1,
                'name' => 'Son',
                'description' => null,
                'status' => true,
                'created_at' => '2024-02-23 08:10:00',
                'updated_at'=> null
            ],
            [
                'id' => 9,
                'id_parent' => 1,
                'name' => 'Phấn má hồng',
                'description' => null,
                'status' => true,
                'created_at' => '2024-02-23 08:10:00',
                'updated_at'=> null
            ]
        ]);
    }
}