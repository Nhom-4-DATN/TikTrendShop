<?php

namespace Database\Seeders;

use App\Models\Stores;
use App\Models\User;
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
        $user = User::all();
        $store = Stores::all();
        DB::table('follows')->insert([
            [
                'id_store' => $store->random()->id,
                'id_user' => $user->random()->id,
                'is_follow' => true,
                'created_at' => '2024-02-23 08:10:00',
                'updated_at' => null
            ],
            [
                'id_store' => $store->random()->id,
                'id_user' => $user->random()->id,
                'is_follow' => true,
                'created_at' => '2024-02-23 08:10:00',
                'updated_at' => null
            ],
            [
                'id_store' => $store->random()->id,
                'id_user' => $user->random()->id,
                'is_follow' => true,
                'created_at' => '2024-02-23 08:10:00',
                'updated_at' => null
            ],
            [
                'id_store' => $store->random()->id,
                'id_user' => $user->random()->id,
                'is_follow' => true,
                'created_at' => '2024-02-23 08:10:00',
                'updated_at' => null
            ],
            [
                'id_store' => $store->random()->id,
                'id_user' => $user->random()->id,
                'is_follow' => true,
                'created_at' => '2024-02-23 08:10:00',
                'updated_at' => null
            ],
            [
                'id_store' => $store->random()->id,
                'id_user' => $user->random()->id,
                'is_follow' => true,
                'created_at' => '2024-02-23 08:10:00',
                'updated_at' => null
            ],
            [
                'id_store' => $store->random()->id,
                'id_user' => $user->random()->id,
                'is_follow' => true,
                'created_at' => '2024-02-23 08:10:00',
                'updated_at' => null
            ],
            [
                'id_store' => $store->random()->id,
                'id_user' => $user->random()->id,
                'is_follow' => true,
                'created_at' => '2024-02-23 08:10:00',
                'updated_at' => null
            ],
            [
                'id_store' => $store->random()->id,
                'id_user' => $user->random()->id,
                'is_follow' => true,
                'created_at' => '2024-02-23 08:10:00',
                'updated_at' => null
            ],
            [
                'id_store' => $store->random()->id,
                'id_user' => $user->random()->id,
                'is_follow' => true,
                'created_at' => '2024-02-23 08:10:00',
                'updated_at' => null
            ]
        ]);
    }
}
