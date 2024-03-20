<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class StoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userId = User::all('id');
        DB::table('stores')->insert([
            [
                'id_user' => $userId->random()->id,
                'name' => 'Quần áo cho bạn',
                'address' => 'Quận3, Hồ Chí Minh',
                'status' => true,
                'follows' => 0,
                'description' => 'Shop bán quần áo',
                'image_arr' => '"images": [
                    "image1.jpg",
                    "image2.jpg",
                    "image3.jpg"
                ]',
                'phone' => '0123456789',
                'slug' => 'laptop-pc',
                'coin' => 0,
                'thumb_url' => 'zxvc',
                'created_at' => '2024-02-23 08:10:00',
                'updated_at' => null
            ],
            [
                'id_user' => $userId->random()->id,
                'name' => 'Mỹ phẩm cho bạn',
                'address' => 'Quận 4, Hồ Chí Minh',
                'status' => true,
                'follows' => 0,
                'description' => 'Shop bán mỹ phẩm',
                'image_arr' => '"images": [
                    "image1.jpg",
                    "image2.jpg",
                    "image3.jpg"
                ]',
                'phone' => '0123456789',
                'slug' => 'laptop-pc',
                'coin' => 0,
                'thumb_url' => 'zxvc',
                'created_at' => '2024-02-23 08:10:00',
                'updated_at' => null
            ],
            [
                'id_user' => $userId->random()->id,
                'name' => 'Laptop & PC cho bạn',
                'address' => 'Quận 7, Hồ Chí Minh',
                'status' => true,
                'follows' => 0,
                'description' => 'Shop bán Laptop & PC',
                'image_arr' => '"images": [
                    "image1.jpg",
                    "image2.jpg",
                    "image3.jpg"
                ]',
                'phone' => '0123456789',
                'slug' => 'laptop-pc',
                'coin' => 0,
                'thumb_url' => 'zxvc',
                'created_at' => '2024-02-23 08:10:00',
                'updated_at' => null
            ]
        ]);
    }
}
