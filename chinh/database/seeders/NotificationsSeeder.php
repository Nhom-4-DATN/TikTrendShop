<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class NotificationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('notifications')->insert([
            [
                'id_notification' => 1,
                'content' => 'Chúng tôi xin lỗi phải thay đổi chính sách ưu đãi đối với khách hàng hạng "Bạc". Mức lên hạng bạc được nâng lên thành 20.000 điểm',
                'title' => 'Thông báo đổi chính sách ưu đãi đối với khách hàng hạng "Bạc"',
                'status' => true,
                'image' => 'image.png',
                'is_user' => true,
                'rank_user' => 4,
                'create_date' => '2024-02-23 08:10:00',
                'update_date' => null,
                'created_at' => '2024-02-23 08:10:00',
                'updated_at'=> null
            ],
            [
                'id_notification' => 2,
                'content' => 'Chúng tôi xin lỗi phải thay đổi chính sách ưu đãi đối với khách hàng hạng "Vàng". Mức lên hạng bạc được nâng lên thành 40.000 điểm',
                'title' => 'Thông báo đổi chính sách ưu đãi đối với khách hàng hạng "Vàng"',
                'status' => true,
                'image' => 'image.png',
                'is_user' => true,
                'rank_user' => 4,
                'create_date' => '2024-02-23 08:10:00',
                'update_date' => null,
                'created_at' => '2024-02-23 08:10:00',
                'updated_at'=> null
            ],
            [
                'id_notification' => 3,
                'content' => 'Chúng tôi xin lỗi phải thay đổi chính sách ưu đãi đối với khách hàng hạng "Kim cương". Mức lên hạng bạc được nâng lên thành 100.000 điểm',
                'title' => 'Thông báo đổi chính sách ưu đãi đối với khách hàng hạng "Kim cương"',
                'status' => true,
                'image' => 'image.png',
                'is_user' => true,
                'rank_user' => 4,
                'create_date' => '2024-02-23 08:10:00',
                'update_date' => null,
                'created_at' => '2024-02-23 08:10:00',
                'updated_at'=> null
            ],
            [
                'id_notification' => 4,
                'content' => 'Chúc mừng năm mới: Gửi tặng người dùng các mã khuyến mãi sau: NAMMOI2024, RONGVANG2024, HAPPYNEWYEAR2024',
                'title' => 'Gửi tặng bạn mã khuyến mãi',
                'status' => true,
                'image' => 'image.png',
                'is_user' => true,
                'rank_user' => 4,
                'create_date' => '2024-02-23 08:10:00',
                'update_date' => null,
                'created_at' => '2024-02-23 08:10:00',
                'updated_at'=> null
            ],
            [
                'id_notification' => 5,
                'content' => 'Chúng tôi xin lỗi vì phải thay đổi chiếc khấu với các nhà bán thành nâng chiếc khấu cho mỗi đơn hàng lên 5%',
                'title' => 'Thay đổi chính sách chiếc khấu với nhà bán hàng',
                'status' => true,
                'image' => 'image.png',
                'is_user' => false,
                'rank_user' => null,
                'create_date' => '2024-02-23 08:10:00',
                'update_date' => null,
                'created_at' => '2024-02-23 08:10:00',
                'updated_at'=> null
            ]
        ]);
    }
}