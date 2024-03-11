<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class PaysSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pays')->insert([
            [
                'id' => 2,
                'id_user' => 2,
                'name' => 'Lê Thành Đạt',
                'number' => '3948571029',
                'bank' => 'Vietcombank',
                'created_at' => '2024-02-23 08:10:00',
                'updated_at'=> null
            ],
            [
                'id' => 3,
                'id_user' => 3,
                'name' => 'Nguyễn Phương Hùng',
                'number' => '9284745682',
                'bank' => 'Agricbank',
                'created_at' => '2024-02-23 08:10:00',
                'updated_at'=> null
            ],
            [
                'id' => 4,
                'id_user' => 4,
                'name' => 'Đinh Thị Ngọc Linh',
                'number' => '9485672784892',
                'bank' => 'Namabank',
                'created_at' => '2024-02-23 08:10:00',
                'updated_at'=> null
            ],
            [
                'id' => 5,
                'id_user' => 5,
                'name' => 'Nguyễn Đỗ Quốc Trung',
                'number' => '4576312341234',
                'bank' => 'Vietinbank',
                'created_at' => '2024-02-23 08:10:00',
                'updated_at'=> null
            ],
            [
                'id' => 6,
                'id_user' => 6,
                'name' => 'Lê Thị Ngọc Hà',
                'number' => '3567451234123',
                'bank' => 'Vietinbank',
                'created_at' => '2024-02-23 08:10:00',
                'updated_at'=> null
            ],
            [
                'id' => 7,
                'id_user' => 7,
                'name' => 'Thiên Kim Đại Tiểu Thư',
                'number' => '345634512341237',
                'bank' => 'Vietinbank',
                'created_at' => '2024-02-23 08:10:00',
                'updated_at'=> null
            ],
            [
                'id' => 8,
                'id_user' => 8,
                'name' => 'Phan Đinh Tuyền',
                'number' => '2345476851234',
                'bank' => 'Vietinbank',
                'created_at' => '2024-02-23 08:10:00',
                'updated_at'=> null
            ],
            [
                'id' => 9,
                'id_user' => 9,
                'name' => "Võ Hoàng Trung",
                'number' => '12344576813',
                'bank' => 'Vietinbank',
                'created_at' => '2024-02-23 08:10:00',
                'updated_at'=> null
            ],
            [
                'id' => 10,
                'id_user' => 10,
                'name' => 'Nguyễn Hoàng Hà',
                'number' => '546781234523',
                'bank' => 'Vietinbank',
                'created_at' => '2024-02-23 08:10:00',
                'updated_at'=> null
            ],
            [
                'id' => 11,
                'id_user' => 11,
                'name' => "Lê Thị Toàn",
                'number' => '4568741324123',
                'bank' => 'Vietinbank',
                'created_at' => '2024-02-23 08:10:00',
                'updated_at'=> null
            ]
        ]);
    }
}