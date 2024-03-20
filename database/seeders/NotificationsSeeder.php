<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
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
        $user = User::all();
        DB::table('notifications')->insert([
            [
                'content' => 'Chúng tôi xin lỗi phải thay đổi chính sách ưu đãi đối với khách hàng hạng "Bạc". Mức lên hạng bạc được nâng lên thành 20.000 điểm',
                'title' => 'Thông báo đổi chính sách ưu đãi đối với khách hàng hạng "Bạc"',
                'status' => true,
                'image' => 'image.png',
                'id_user' => $user->random()->id,
                'rank_user' => 4,
                'create_date' => '2024-02-23 08:10:00',
                'update_date' => Carbon::now(),
                'created_at' => '2024-02-23 08:10:00',
                'updated_at' => null
            ],
            [
                'content' => 'Chúng tôi xin lỗi phải thay đổi chính sách ưu đãi đối với khách hàng hạng "Vàng". Mức lên hạng bạc được nâng lên thành 40.000 điểm',
                'title' => 'Thông báo đổi chính sách ưu đãi đối với khách hàng hạng "Vàng"',
                'status' => true,
                'image' => 'image.png',
                'id_user' => $user->random()->id,
                'rank_user' => 4,
                'create_date' => '2024-02-23 08:10:00',
                'update_date' => Carbon::now(),
                'created_at' => '2024-02-23 08:10:00',
                'updated_at' => null
            ],
            [
                'content' => 'Chúng tôi xin lỗi phải thay đổi chính sách ưu đãi đối với khách hàng hạng "Kim cương". Mức lên hạng bạc được nâng lên thành 100.000 điểm',
                'title' => 'Thông báo đổi chính sách ưu đãi đối với khách hàng hạng "Kim cương"',
                'status' => true,
                'image' => 'image.png',
                'id_user' => $user->random()->id,
                'rank_user' => 4,
                'create_date' => '2024-02-23 08:10:00',
                'update_date' => Carbon::now(),
                'created_at' => '2024-02-23 08:10:00',
                'updated_at' => null
            ],
            [
                'content' => 'Chúc mừng năm mới: Gửi tặng người dùng các mã khuyến mãi sau: NAMMOI2024, RONGVANG2024, HAPPYNEWYEAR2024',
                'title' => 'Gửi tặng bạn mã khuyến mãi',
                'status' => true,
                'image' => 'image.png',
                'id_user' => $user->random()->id,
                'rank_user' => 4,
                'create_date' => '2024-02-23 08:10:00',
                'update_date' => Carbon::now(),
                'created_at' => '2024-02-23 08:10:00',
                'updated_at' => null
            ],
            [
                'content' => 'Chúng tôi xin lỗi vì phải thay đổi chiếc khấu với các nhà bán thành nâng chiếc khấu cho mỗi đơn hàng lên 5%',
                'title' => 'Thay đổi chính sách chiếc khấu với nhà bán hàng',
                'status' => true,
                'image' => 'image.png',
                'id_user' => $user->random()->id,
                'rank_user' => null,
                'create_date' => '2024-02-23 08:10:00',
                'update_date' => Carbon::now(),
                'created_at' => '2024-02-23 08:10:00',
                'updated_at' => null
            ]
        ]);
    }
}
