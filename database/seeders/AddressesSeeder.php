<?php

namespace Database\Seeders;

use App\Models\Stores;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AddressesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::all();
        DB::table('addresses')->insert([
            [
                'id_user' => $user->random()->id,
                'name' => 'Long',
                'address' => 'Quận 2, Hồ Chí Minh',
                'phone' => '0123456789',
                'is_default' => false,
                'created_at' => '2024-02-23 08:10:00',
                'updated_at' => null
            ],
            [
                'id_user' => $user->random()->id,
                'name' => 'Thiện',
                'address' => 'Quận 1, Hồ Chí Minh',
                'phone' => '02938475618',
                'is_default' => true,
                'created_at' => '2024-02-23 08:10:00',
                'updated_at' => null
            ],
            [
                'id_user' => $user->random()->id,
                'name' => 'Như',
                'address' => 'Quận 1, Hồ Chí Minh',
                'phone' => '028384958',
                'is_default' => false,
                'created_at' => '2024-02-23 08:10:00',
                'updated_at' => null
            ],
            [
                'id_user' => $user->random()->id,
                'name' => 'Hằng',
                'address' => 'Quận 10, Hồ Chí Minh',
                'phone' => '0495827461',
                'is_default' => true,
                'created_at' => '2024-02-23 08:10:00',
                'updated_at' => null
            ],
            [
                'id_user' => $user->random()->id,
                'name' => 'Huỳnh',
                'address' => 'Quận 10, Hồ Chí Minh',
                'phone' => '0495867102',
                'is_default' => false,
                'created_at' => '2024-02-23 08:10:00',
                'updated_at' => null
            ],
            [
                'id_user' => $user->random()->id,
                'name' => 'Hùng',
                'address' => 'Quận 6, Hồ Chí Minh',
                'phone' => '0294857274',
                'is_default' => true,
                'created_at' => '2024-02-23 08:10:00',
                'updated_at' => null
            ],
            [
                'id_user' => $user->random()->id,
                'name' => 'Lộc',
                'address' => 'Quận Tân Phú, Hồ Chí Minh',
                'phone' => '0987867564',
                'is_default' => false,
                'created_at' => '2024-02-23 08:10:00',
                'updated_at' => null
            ],
            [
                'id_user' => $user->random()->id,
                'name' => 'Thảo',
                'address' => 'Quận Bình Thạnh, Hồ Chí Minh',
                'phone' => '0574637859',
                'is_default' => true,
                'created_at' => '2024-02-23 08:10:00',
                'updated_at' => null
            ],
            [
                'id_user' => $user->random()->id,
                'name' => 'Linh',
                'address' => 'Quận Thủ Đức, Hồ Chí Minh',
                'phone' => '0584938576',
                'is_default' => false,
                'created_at' => '2024-02-23 08:10:00',
                'updated_at' => null
            ],
            [
                'id_user' => $user->random()->id,
                'name' => 'Phúc',
                'address' => 'Quận 9, Hồ Chí Minh',
                'phone' => '0985738412',
                'is_default' => true,
                'created_at' => '2024-02-23 08:10:00',
                'updated_at' => null
            ],
            [
                'id_user' => $user->random()->id,
                'name' => 'Tú',
                'address' => 'Quận 3',
                'phone' => '0999888777',
                'is_default' => false,
                'created_at' => '2024-02-23 08:10:00',
                'updated_at' => null
            ],
            [
                'id_user' => $user->random()->id,
                'name' => 'Vượng',
                'address' => 'Quận 2',
                'phone' => '0777888999',
                'is_default' => true,
                'created_at' => '2024-02-23 08:10:00',
                'updated_at' => null
            ],
            [
                'id_user' => $user->random()->id,
                'name' => 'Trinh',
                'address' => 'Quận 4',
                'phone' => '08765465738',
                'is_default' => false,
                'created_at' => '2024-02-23 08:10:00',
                'updated_at' => null
            ],
            [
                'id_user' => $user->random()->id,
                'name' => 'Văn',
                'address' => 'Quận 6, Hồ Chí Minh',
                'phone' => '0958672345',
                'is_default' => true,
                'created_at' => '2024-02-23 08:10:00',
                'updated_at' => null
            ],
            [
                'id_user' => $user->random()->id,
                'name' => 'Toàn',
                'address' => 'Quận 7, Hồ Chí Minh',
                'phone' => '0675838475',
                'is_default' => false,
                'created_at' => '2024-02-23 08:10:00',
                'updated_at' => null
            ],
            [
                'id_user' => $user->random()->id,
                'name' => 'Ta Là Quan Lão Gia',
                'address' => 'Quận 8, Hồ Chí Minh',
                'phone' => '0685847361',
                'is_default' => true,
                'created_at' => '2024-02-23 08:10:00',
                'updated_at' => null
            ],
            [
                'id_user' => $user->random()->id,
                'name' => 'Bad Man',
                'address' => 'Quận 10, Hồ Chí Minh',
                'phone' => '01646576829',
                'is_default' => false,
                'created_at' => '2024-02-23 08:10:00',
                'updated_at' => null
            ],
            [
                'id_user' => $user->random()->id,
                'name' => 'Sad Man',
                'address' => 'Quận 5, Hồ Chí Minh',
                'phone' => '01646576829',
                'is_default' => true,
                'created_at' => '2024-02-23 08:10:00',
                'updated_at' => null
            ],
            [
                'id_user' => $user->random()->id,
                'name' => 'Long',
                'address' => 'Quận 11, Hồ Chí Minh',
                'phone' => '0987656756',
                'is_default' => false,
                'created_at' => '2024-02-23 08:10:00',
                'updated_at' => null
            ],
            [
                'id_user' => $user->random()->id,
                'name' => 'Lân',
                'address' => 'Quận 12, Hồ Chí Minh',
                'phone' => '0989897675',
                'is_default' => true,
                'created_at' => '2024-02-23 08:10:00',
                'updated_at' => null
            ]
        ]);
    }
}
