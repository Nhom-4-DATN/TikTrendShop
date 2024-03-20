<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaysSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::all();
        DB::table('pays')->insert([
            [
                'id_user' =>  $user->random()->id,
                'name' => 'Lê Thành Đạt',
                'number' => '3948571029',
                'bank' => 'Vietcombank',
                'created_at' => '2024-02-23 08:10:00',
                'updated_at' => null
            ],
            [
                'id_user' =>  $user->random()->id,
                'name' => 'Nguyễn Phương Hùng',
                'number' => '9284745682',
                'bank' => 'Agricbank',
                'created_at' => '2024-02-23 08:10:00',
                'updated_at' => null
            ],
            [
                'id_user' =>  $user->random()->id,
                'name' => 'Đinh Thị Ngọc Linh',
                'number' => '9485672784892',
                'bank' => 'Namabank',
                'created_at' => '2024-02-23 08:10:00',
                'updated_at' => null
            ],
            [
                'id_user' =>  $user->random()->id,
                'name' => 'Nguyễn Đỗ Quốc Trung',
                'number' => '4576312341234',
                'bank' => 'Vietinbank',
                'created_at' => '2024-02-23 08:10:00',
                'updated_at' => null
            ],
            [
                'id_user' =>  $user->random()->id,
                'name' => 'Lê Thị Ngọc Hà',
                'number' => '3567451234123',
                'bank' => 'Vietinbank',
                'created_at' => '2024-02-23 08:10:00',
                'updated_at' => null
            ],
            [
                'id_user' =>  $user->random()->id,
                'name' => 'Thiên Kim Đại Tiểu Thư',
                'number' => '345634512341237',
                'bank' => 'Vietinbank',
                'created_at' => '2024-02-23 08:10:00',
                'updated_at' => null
            ],
            [
                'id_user' =>  $user->random()->id,
                'name' => 'Phan Đinh Tuyền',
                'number' => '2345476851234',
                'bank' => 'Vietinbank',
                'created_at' => '2024-02-23 08:10:00',
                'updated_at' => null
            ],
            [
                'id_user' =>  $user->random()->id,
                'name' => "Võ Hoàng Trung",
                'number' => '12344576813',
                'bank' => 'Vietinbank',
                'created_at' => '2024-02-23 08:10:00',
                'updated_at' => null
            ],
            [
                'id_user' =>  $user->random()->id,
                'name' => 'Nguyễn Hoàng Hà',
                'number' => '546781234523',
                'bank' => 'Vietinbank',
                'created_at' => '2024-02-23 08:10:00',
                'updated_at' => null
            ],
            [
                'id_user' =>  $user->random()->id,
                'name' => "Lê Thị Toàn",
                'number' => '4568741324123',
                'bank' => 'Vietinbank',
                'created_at' => '2024-02-23 08:10:00',
                'updated_at' => null
            ]
        ]);
    }
}
