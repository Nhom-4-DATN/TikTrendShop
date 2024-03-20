<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("users")->insert([
            [
                'user_name' => 'admin',
                'full_name' => 'admin',
                'email' => 'admin@gmail.com',
                'phone' => '0937555353',
                'password' => Hash::make('123'),
                'rank' => '0',
                'status' => true,
                'role' => '0',
                'image' => null,
                'created_at' => '2024-02-23 08:10:00',
                'updated_at' => null
            ],
            [
                'user_name' => 'tranvan',
                'full_name' => 'Trần Văn',
                'email' => 'tranvan@gmail.com',
                'phone' => '0123456789',
                'password' => Hash::make('123'),
                'rank' => 1,
                'status' => true,
                'role' => 1,
                'image' => null,
                'created_at' => '2024-02-23 08:10:00',
                'updated_at' => null
            ],
            [
                'user_name' => 'nguyenvan',
                'full_name' => 'Nguyễn Văn',
                'email' => 'nguyenvan@gmail.com',
                'phone' => '0369852147',
                'password' => Hash::make('123'),
                'rank' => 2,
                'status' => true,
                'role' => 2,
                'image' => null,
                'created_at' => '2024-02-23 08:10:00',
                'updated_at' => null
            ],
            [
                'user_name' => 'lethi',
                'full_name' => 'Lê Thị Vân Anh',
                'email' => 'lethi@gmail.com',
                'phone' => '0235694158',
                'password' => Hash::make('123'),
                'rank' => 2,
                'status' => true,
                'role' => 2,
                'image' => null,
                'created_at' => '2024-02-23 08:10:00',
                'updated_at' => null
            ],
            [
                'user_name' => 'nguyenkim',
                'full_name' => 'Nguyễn Kim Ánh',
                'email' => 'nguyenkim@gmail.com',
                'phone' => '0124536987',
                'password' => Hash::make('123'),
                'rank' => 0,
                'status' => false,
                'role' => 1,
                'image' => NULL,
                'created_at' => '2024-02-23 08:10:00',
                'updated_at' => null
            ],
            [
                'user_name' => 'hoanphi',
                'full_name' => 'Hoàng Phi Hồng',
                'email' => 'honagphi@gmail.com',
                'phone' => '0125478963',
                'password' => Hash::make('123'),
                'rank' => 3,
                'status' => true,
                'role' => 1,
                'image' => NULL,
                'created_at' => '2024-02-23 08:10:00',
                'updated_at' => null
            ],
            [
                'user_name' => 'nguyenngoc',
                'full_name' => 'Nguyễn Ngọc Linh',
                'email' => 'nguyenngoc@gmail.com',
                'phone' => '0214563257',
                'password' => Hash::make('123'),
                'rank' => 3,
                'status' => true,
                'role' => 1,
                'image' => null,
                'created_at' => '2024-02-23 08:10:00',
                'updated_at' => null
            ],
            [
                'user_name' => 'dinhkim',
                'full_name' => 'Đinh Kim Tiểu Thư',
                'email' => 'dinhkin@gmail.com',
                'phone' => '01452367895',
                'password' => Hash::make('123'),
                'rank' => 2,
                'status' => true,
                'role' => 1,
                'image' => null,
                'created_at' => '2024-02-23 08:10:00',
                'updated_at' => null
            ],
            [
                'user_name' => 'vodinh',
                'full_name' => 'Võ Đỉnh Lâm',
                'email' => 'vodinh@gmail.com',
                'phone' => '0245637896',
                'password' => Hash::make('123'),
                'rank' => 3,
                'status' => true,
                'role' => 1,
                'image' => null,
                'created_at' => '2024-02-23 08:10:00',
                'updated_at' => null
            ],
            [
                'user_name' => 'kimthi',
                'full_name' => 'Kim Thị Quế Như',
                'email' => 'kimthi@gmail.com',
                'phone' => '0124536597',
                'password' => Hash::make('123'),
                'rank' => 1,
                'status' => true,
                'role' => 1,
                'image' => null,
                'created_at' => '2024-02-23 08:10:00',
                'updated_at' => null
            ],
            [
                'user_name' => 'nguyenkim',
                'full_name' => 'Nguyễn Kim Tuyến',
                'email' => 'nguyenkim@gmail.com',
                'phone' => '0123453456',
                'password' => Hash::make('123'),
                'rank' => 2,
                'status' => true,
                'role' => 1,
                'image' => null,
                'created_at' => '2024-02-23 08:10:00',
                'updated_at' => null
            ],
        ]);
    }
}
