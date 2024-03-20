<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\User;
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
        $product = Product::all();
        $user = User::all();
        DB::table('likes')->insert([
            [
                'id_product' => $product->random()->id,
                'id_user' => $user->random()->id,
                'is_like' => true,
                'created_at' => '2024-02-23 08:10:00',
                'updated_at' => null
            ],
            [
                'id_product' => $product->random()->id,
                'id_user' => $user->random()->id,
                'is_like' => true,
                'created_at' => '2024-02-23 08:10:00',
                'updated_at' => null
            ],
            [
                'id_product' => $product->random()->id,
                'id_user' => $user->random()->id,
                'is_like' => true,
                'created_at' => '2024-02-23 08:10:00',
                'updated_at' => null
            ],
            [
                'id_product' => $product->random()->id,
                'id_user' => $user->random()->id,
                'is_like' => true,
                'created_at' => '2024-02-23 08:10:00',
                'updated_at' => null
            ],
            [
                'id_product' => $product->random()->id,
                'id_user' => $user->random()->id,
                'is_like' => true,
                'created_at' => '2024-02-23 08:10:00',
                'updated_at' => null
            ],
            [
                'id_product' => $product->random()->id,
                'id_user' => $user->random()->id,
                'is_like' => true,
                'created_at' => '2024-02-23 08:10:00',
                'updated_at' => null
            ],
            [
                'id_product' => $product->random()->id,
                'id_user' => $user->random()->id,
                'is_like' => true,
                'created_at' => '2024-02-23 08:10:00',
                'updated_at' => null
            ],
            [
                'id_product' => $product->random()->id,
                'id_user' => $user->random()->id,
                'is_like' => true,
                'created_at' => '2024-02-23 08:10:00',
                'updated_at' => null
            ],
            [
                'id_product' => $product->random()->id,
                'id_user' => $user->random()->id,
                'is_like' => true,
                'created_at' => '2024-02-23 08:10:00',
                'updated_at' => null
            ],
            [
                'id_product' => $product->random()->id,
                'id_user' => $user->random()->id,
                'is_like' => true,
                'created_at' => '2024-02-23 08:10:00',
                'updated_at' => null
            ],
            [
                'id_product' => $product->random()->id,
                'id_user' => $user->random()->id,
                'is_like' => true,
                'created_at' => '2024-02-23 08:10:00',
                'updated_at' => null
            ],
            [
                'id_product' => $product->random()->id,
                'id_user' => $user->random()->id,
                'is_like' => true,
                'created_at' => '2024-02-23 08:10:00',
                'updated_at' => null
            ],
            [
                'id_product' => $product->random()->id,
                'id_user' => $user->random()->id,
                'is_like' => true,
                'created_at' => '2024-02-23 08:10:00',
                'updated_at' => null
            ],
            [
                'id_product' => $product->random()->id,
                'id_user' => $user->random()->id,
                'is_like' => true,
                'created_at' => '2024-02-23 08:10:00',
                'updated_at' => null
            ],
            [
                'id_product' => $product->random()->id,
                'id_user' => $user->random()->id,
                'is_like' => true,
                'created_at' => '2024-02-23 08:10:00',
                'updated_at' => null
            ],
            [
                'id_product' => $product->random()->id,
                'id_user' => $user->random()->id,
                'is_like' => true,
                'created_at' => '2024-02-23 08:10:00',
                'updated_at' => null
            ],
            [
                'id_product' => $product->random()->id,
                'id_user' => $user->random()->id,
                'is_like' => true,
                'created_at' => '2024-02-23 08:10:00',
                'updated_at' => null
            ],
            [
                'id_product' => $product->random()->id,
                'id_user' => $user->random()->id,
                'is_like' => true,
                'created_at' => '2024-02-23 08:10:00',
                'updated_at' => null
            ],
            [
                'id_product' => $product->random()->id,
                'id_user' => $user->random()->id,
                'is_like' => true,
                'created_at' => '2024-02-23 08:10:00',
                'updated_at' => null
            ],
            [
                'id_product' => $product->random()->id,
                'id_user' => $user->random()->id,
                'is_like' => true,
                'created_at' => '2024-02-23 08:10:00',
                'updated_at' => null
            ],
            [
                'id_product' => $product->random()->id,
                'id_user' => $user->random()->id,
                'is_like' => true,
                'created_at' => '2024-02-23 08:10:00',
                'updated_at' => null
            ],
            [
                'id_product' => $product->random()->id,
                'id_user' => $user->random()->id,
                'is_like' => true,
                'created_at' => '2024-02-23 08:10:00',
                'updated_at' => null
            ]
        ]);
    }
}
