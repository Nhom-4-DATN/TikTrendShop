<?php

namespace Database\Seeders;

use App\Models\Stores;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class CategoriesBlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $Store = Stores::all();
        DB::table('categories_blog')->insert([
            [
                'id_store' => $Store->random()->id,
                'name' => 'Áo croptop',
                'description' => 'Cách chọn áo croptop phù hợp',
                'status' => true,
                'created_at' => '2024-02-23 08:10:00',
                'updated_at' => null,
                'deleted_at' => null,
                'parent_id' => 1,
                'slug' => Str::slug('Áo croptop')
            ],
            [
                'id_store' => $Store->random()->id,
                'name' => 'Quần jeans',
                'description' => 'Cách chọn quần jeans phù hợp',
                'status' => true,
                'created_at' => '2024-02-23 08:10:00',
                'updated_at' => null,
                'deleted_at' => null,
                'parent_id' => 1,
                'slug' => Str::slug('Quần jeans')
            ],
            [
                'id_store' => $Store->random()->id,
                'name' => 'Áo sơ mi',
                'description' => 'Cách chọn áo sơ mi phù hợp',
                'status' => false,
                'created_at' => '2024-02-23 08:10:00',
                'updated_at' => null,
                'deleted_at' => null,
                'parent_id' => 1,
                'slug' => Str::slug('Áo sơ mi')
            ],
            [
                'id_store' => $Store->random()->id,
                'name' => 'Son',
                'description' => 'Cách chọn son phù hợp',
                'status' => true,
                'created_at' => '2024-02-23 08:10:00',
                'updated_at' => null,

                'deleted_at' => null,
                'parent_id' => 1,
                'slug' => Str::slug('Son')
            ],
            [
                'id_store' => $Store->random()->id,
                'name' => 'Phấn má hồng',
                'description' => 'Cách chọn phấn má hồng phù hợp',
                'status' => true,
                'created_at' => '2024-02-23 08:10:00',
                'updated_at' => null,

                'deleted_at' => null,
                'parent_id' => 1,
                'slug' => Str::slug('Phấn má hồng')
            ],
            [
                'id_store' => $Store->random()->id,
                'name' => 'Sơn móng tay',
                'description' => 'Cách chọn sơn móng tay phù hợp',
                'status' => false,
                'created_at' => '2024-02-23 08:10:00',
                'updated_at' => null,

                'deleted_at' => null,
                'parent_id' => 1,
                'slug' => Str::slug('Sơn móng tay')
            ],
            [
                'id_store' => $Store->random()->id,
                'name' => 'Laptop',
                'description' => 'Cách chọn Laptop',
                'status' => true,
                'created_at' => '2024-02-23 08:10:00',
                'updated_at' => null,

                'deleted_at' => null,
                'parent_id' => 1,
                'slug' => Str::slug('Laptop')
            ],
            [
                'id_store' => $Store->random()->id,
                'name' => 'Chọn PC',
                'description' => 'Cách chọn PC',
                'status' => true,
                'created_at' => '2024-02-23 08:10:00',
                'updated_at' => null,

                'deleted_at' => null,
                'parent_id' => 1,
                'slug' => Str::slug('Chọn PC')
            ],
            [
                'id_store' => $Store->random()->id,
                'name' => 'Keo tản nhiệt',
                'description' => 'Cách chọn keo tản nhiệt',
                'status' => true,
                'created_at' => '2024-02-23 08:10:00',
                'updated_at' => null,

                'deleted_at' => null,
                'parent_id' => 1,
                'slug' => Str::slug('Keo tản nhiệt')
            ]
        ]);
    }
}
