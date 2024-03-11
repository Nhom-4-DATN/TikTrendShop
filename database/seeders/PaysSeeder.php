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
                'id_pay' => 2,
                'id' => 2,
                'name' => 'Lê Thành Đạt',
                'number' => '3948571029',
                'bank' => 'Vietcombank',
                'created_at' => '2024-02-23 08:10:00',
                'updated_at' => null
            ],
            [
                'id_pay' => 3,
                'id' => 3,
                'name' => 'Nguyễn Phương Hùng',
                'number' => '9284745682',
                'bank' => 'Agricbank',
                'created_at' => '2024-02-23 08:10:00',
                'updated_at' => null
            ],
            [
                'id_pay' => 4,
                'id' => 4,
                'name' => 'Đinh Thị Ngọc Linh',
                'number' => '9485672784892',
                'bank' => 'Namabank',
                'created_at' => '2024-02-23 08:10:00',
                'updated_at' => null
            ],
            [
                'id_pay' => 5,
                'id' => 5,
                'name' => 'Nguyễn Đỗ Quốc Trung',
                'number' => '4576312341234',
                'bank' => 'Vietinbank',
                'created_at' => '2024-02-23 08:10:00',
                'updated_at' => null
            ],
            [
                'id_pay' => 6,
                'id' => 6,
                'name' => 'Lê Thị Ngọc Hà',
                'number' => '3567451234123',
                'bank' => 'Vietinbank',
                'created_at' => '2024-02-23 08:10:00',
                'updated_at' => null
            ],
            [
                'id_pay' => 7,
                'id' => 7,
                'name' => 'Thiên Kim Đại Tiểu Thư',
                'number' => '345634512341237',
                'bank' => 'Vietinbank',
                'created_at' => '2024-02-23 08:10:00',
                'updated_at' => null
            ],
            [
                'id_pay' => 8,
                'id' => 8,
                'name' => 'Phan Đinh Tuyền',
                'number' => '2345476851234',
                'bank' => 'Vietinbank',
                'created_at' => '2024-02-23 08:10:00',
                'updated_at' => null
            ],
            [
                'id_pay' => 9,
                'id' => 9,
                'name' => "Võ Hoàng Trung",
                'number' => '12344576813',
                'bank' => 'Vietinbank',
                'created_at' => '2024-02-23 08:10:00',
                'updated_at' => null
            ],
            [
                'id_pay' => 10,
                'id' => 10,
                'name' => 'Nguyễn Hoàng Hà',
                'number' => '546781234523',
                'bank' => 'Vietinbank',
                'created_at' => '2024-02-23 08:10:00',
                'updated_at' => null
            ],
            [
                'id_pay' => 11,
                'id' => 11,
                'name' => "Lê Thị Toàn",
                'number' => '4568741324123',
                'bank' => 'Vietinbank',
                'created_at' => '2024-02-23 08:10:00',
                'updated_at' => null
            ]
        ]);
    }
}
