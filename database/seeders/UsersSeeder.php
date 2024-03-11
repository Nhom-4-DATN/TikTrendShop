<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
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
                'id' => 1,
                'user_name' => 'admin',
                'full_name' => 'admin',
                'email' => 'admin@gmail.com',
                'phone' => '0937555353',
                'password' => Hash::make('123'),
                'email_verified_at' => null,
                'rank' => '0',
                'status' => true,
                'role' => '0',
                'image' => null,
                'created_at' => '2024-02-23 08:10:00',
                'updated_at' => null
            ],
            [
                'id' => 2,
                'user_name' => 'tranvan',
                'full_name' => 'Trần Văn',
                'email' => 'tranvan@gmail.com',
                'phone' => '0123456789',
                'password' => Hash::make('123'),
                'email_verified_at' => null,
                'rank' => 1,
                'status' => true,
                'role' => 1,
                'image' => null,
                'created_at' => '2024-02-23 08:10:00',
                'updated_at' => null
            ],
            [
                'id' => 3,
                'user_name' => 'nguyenvan',
                'full_name' => 'Nguyễn Văn',
                'email' => 'nguyenvan@gmail.com',
                'phone' => '0369852147',
                'password' => Hash::make('123'),
                'email_verified_at' => null,
                'rank' => 2,
                'status' => true,
                'role' => 2,
                'image' => null,
                'created_at' => '2024-02-23 08:10:00',
                'updated_at' => null
            ],
            [
                'id' => 4,
                'user_name' => 'lethi',
                'full_name' => 'Lê Thị Vân Anh',
                'email' => 'lethi@gmail.com',
                'phone' => '0235694158',
                'password' => Hash::make('123'),
                'email_verified_at' => null,
                'rank' => 2,
                'status' => true,
                'role' => 2,
                'image' => null,
                'created_at' => '2024-02-23 08:10:00',
                'updated_at' => null
            ],
            [
                'id' => 5,
                'user_name' => 'nguyenkim',
                'full_name' => 'Nguyễn Kim Ánh',
                'email' => 'nguyenkim@gmail.com',
                'phone' => '0124536987',
                'password' => Hash::make('123'),
                'email_verified_at' => null,
                'rank' => 0,
                'status' => false,
                'role' => 1,
                'image' => NULL,
                'created_at' => '2024-02-23 08:10:00',
                'updated_at' => null
            ],
            [
                'id' => 6,
                'user_name' => 'hoanphi',
                'full_name' => 'Hoàng Phi Hồng',
                'email' => 'honagphi@gmail.com',
                'phone' => '0125478963',
                'password' => Hash::make('123'),
                'email_verified_at' => null,
                'rank' => 3,
                'status' => true,
                'role' => 1,
                'image' => NULL,
                'created_at' => '2024-02-23 08:10:00',
                'updated_at' => null
            ],
            [
                'id' => 7,
                'user_name' => 'nguyenngoc',
                'full_name' => 'Nguyễn Ngọc Linh',
                'email' => 'nguyenngoc@gmail.com',
                'phone' => '0214563257',
                'password' => Hash::make('123'),
                'email_verified_at' => null,
                'rank' => 3,
                'status' => true,
                'role' => 1,
                'image' => null,
                'created_at' => '2024-02-23 08:10:00',
                'updated_at' => null
            ],
            [
                'id' => 8,
                'user_name' => 'dinhkim',
                'full_name' => 'Đinh Kim Tiểu Thư',
                'email' => 'dinhkin@gmail.com',
                'phone' => '01452367895',
                'password' => Hash::make('123'),
                'email_verified_at' => null,
                'rank' => 2,
                'status' => true,
                'role' => 1,
                'image' => null,
                'created_at' => '2024-02-23 08:10:00',
                'updated_at' => null
            ],
            [
                'id' => 9,
                'user_name' => 'vodinh',
                'full_name' => 'Võ Đỉnh Lâm',
                'email' => 'vodinh@gmail.com',
                'phone' => '0245637896',
                'password' => Hash::make('123'),
                'email_verified_at' => null,
                'rank' => 3,
                'status' => true,
                'role' => 1,
                'image' => null,
                'created_at' => '2024-02-23 08:10:00',
                'updated_at' => null
            ],
            [
                'id' => 10,
                'user_name' => 'kimthi',
                'full_name' => 'Kim Thị Quế Như',
                'email' => 'kimthi@gmail.com',
                'phone' => '0124536597',
                'password' => Hash::make('123'),
                'email_verified_at' => null,
                'rank' => 1,
                'status' => true,
                'role' => 1,
                'image' => null,
                'created_at' => '2024-02-23 08:10:00',
                'updated_at' => null
            ],
            [
                'id' => 11,
                'user_name' => 'nguyenkim',
                'full_name' => 'Nguyễn Kim Tuyến',
                'email' => 'nguyenkim@gmail.com',
                'phone' => '0123453456',
                'password' => Hash::make('123'),
                'email_verified_at' => null,
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
