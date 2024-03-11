<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CategoriesBlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories_blog')->insert([
            [
                'id'=> 1,
                'id_store'=> 1,
                'name'=> 'Áo croptop',
                'description'=> 'Cách chọn áo croptop phù hợp',
                'status' => true,
                'created_at' => '2024-02-23 08:10:00',
                'updated_at'=> null,
                'deleted_at'=> null,
'parent_id'=>1,
'slug'=>'url_item'
            ],
            [
                'id'=> 2,
                'id_store'=> 1,
                'name'=> 'Quần jeans',
                'description'=> 'Cách chọn quần jeans phù hợp',
                'status' => true,
                'created_at' => '2024-02-23 08:10:00',
                'updated_at'=> null,
                'deleted_at'=> null,
'parent_id'=>1,
'slug'=>'url_item'
            ],
            [
                'id'=> 3,
                'id_store'=> 1,
                'name'=> 'Áo sơ mi',
                'description'=> 'Cách chọn áo sơ mi phù hợp',
                'status' => false,
                'created_at' => '2024-02-23 08:10:00',
                'updated_at'=> null,
                'deleted_at'=> null,
'parent_id'=>1,
'slug'=>'url_item'
            ],
            [
                'id'=> 4,
                'id_store'=> 2,
                'name'=> 'Son',
                'description'=> 'Cách chọn son phù hợp',
                'status' => true,
                'created_at' => '2024-02-23 08:10:00',
                'updated_at'=> null,
                'deleted_at'=> null,
'parent_id'=>1,
'slug'=>'url_item'
            ],
            [
                'id'=> 5,
                'id_store'=> 2,
                'name'=> 'Phấn má hồng',
                'description'=> 'Cách chọn phấn má hồng phù hợp',
                'status' => true,
                'created_at' => '2024-02-23 08:10:00',
                'updated_at'=> null,
                'deleted_at'=> null,
'parent_id'=>1,
'slug'=>'url_item'
            ],
            [
                'id'=> 6,
                'id_store'=> 2,
                'name'=> 'Sơn móng tay',
                'description'=> 'Cách chọn sơn móng tay phù hợp',
                'status' => false,
                'created_at' => '2024-02-23 08:10:00',
                'updated_at'=> null,
                'deleted_at'=> null,
'parent_id'=>1,
'slug'=>'url_item'
            ],
            [
                'id'=> 7,
                'id_store'=> 3,
                'name'=> 'Laptop',
                'description'=> 'Cách chọn Laptop',
                'status' => true,
                'created_at' => '2024-02-23 08:10:00',
                'updated_at'=> null,
                'deleted_at'=> null,
'parent_id'=>1,
'slug'=>'url_item'
            ],
            [
                'id'=> 8,
                'id_store'=> 3,
                'name'=> 'Chọn PC',
                'description'=> 'Cách chọn PC',
                'status' => true,
                'created_at' => '2024-02-23 08:10:00',
                'updated_at'=> null,
                'deleted_at'=> null,
'parent_id'=>1,
'slug'=>'url_item'
            ], 
            [
                'id'=> 9,
                'id_store'=> 3,
                'name'=> 'Keo tản nhiệt',
                'description'=> 'Cách chọn keo tản nhiệt',
                'status' => true,
                'created_at' => '2024-02-23 08:10:00',
                'updated_at'=> null,
                'deleted_at'=> null,
'parent_id'=>1,
'slug'=>'url_item'
            ]
        ]);
    }
}