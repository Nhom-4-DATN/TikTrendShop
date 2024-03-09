<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class ConsigneesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('consignees')->insert([
            [
                'id_consignees' => 1,
                'id' => 2,
                'name' => 'Long',
                'address' => 'Quận 2, Hồ Chí Minh',
                'phone' => '0123456789',
                'is_default' => false,
                'created_at' => '2024-02-23 08:10:00',
                'updated_at'=> null
            ],
            [
                'id_consignees' => 2,
                'id' => 2,
                'name' => 'Thiện',
                'address' => 'Quận 1, Hồ Chí Minh',
                'phone' => '02938475618',
                'is_default' => true,
                'created_at' => '2024-02-23 08:10:00',
                'updated_at'=> null
            ],
            [
                'id_consignees' => 3,
                'id' => 3,
                'name' => 'Như',
                'address' => 'Quận 1, Hồ Chí Minh',
                'phone' => '028384958',
                'is_default' => false,
                'created_at' => '2024-02-23 08:10:00',
                'updated_at'=> null
            ],
            [
                'id_consignees' => 4,
                'id' => 3,
                'name' => 'Hằng',
                'address' => 'Quận 10, Hồ Chí Minh',
                'phone' => '0495827461',
                'is_default' => true,
                'created_at' => '2024-02-23 08:10:00',
                'updated_at'=> null
            ],
            [
                'id_consignees' => 5,
                'id' => 4,
                'name' => 'Huỳnh',
                'address' => 'Quận 10, Hồ Chí Minh',
                'phone' => '0495867102',
                'is_default' => false,
                'created_at' => '2024-02-23 08:10:00',
                'updated_at'=> null
            ],
            [
                'id_consignees' => 6,
                'id' => 4,
                'name' => 'Hùng',
                'address' => 'Quận 6, Hồ Chí Minh',
                'phone' => '0294857274',
                'is_default' => true,
                'created_at' => '2024-02-23 08:10:00',
                'updated_at'=> null
            ],
            [
                'id_consignees' => 7,
                'id' => 5,
                'name' => 'Lộc',
                'address' => 'Quận Tân Phú, Hồ Chí Minh',
                'phone' => '0987867564',
                'is_default' => false,
                'created_at' => '2024-02-23 08:10:00',
                'updated_at'=> null
            ],
            [
                'id_consignees' => 8,
                'id' => 5,
                'name' => 'Thảo',
                'address' => 'Quận Bình Thạnh, Hồ Chí Minh',
                'phone' => '0574637859',
                'is_default' => true,
                'created_at' => '2024-02-23 08:10:00',
                'updated_at'=> null
            ],
            [
                'id_consignees' => 9,
                'id' => 6,
                'name' => 'Linh',
                'address' => 'Quận Thủ Đức, Hồ Chí Minh',
                'phone' => '0584938576',
                'is_default' => false,
                'created_at' => '2024-02-23 08:10:00',
                'updated_at'=> null
            ],
            [
                'id_consignees' => 10,
                'id' => 6,
                'name' => 'Phúc',
                'address' => 'Quận 9, Hồ Chí Minh',
                'phone' => '0985738412',
                'is_default' => true,
                'created_at' => '2024-02-23 08:10:00',
                'updated_at'=> null
            ],
            [
                'id_consignees' => 11,
                'id' => 7,
                'name' => 'Tú',
                'address' => 'Quận 3',
                'phone' => '0999888777',
                'is_default' => false,
                'created_at' => '2024-02-23 08:10:00',
                'updated_at'=> null
            ],
            [
                'id_consignees' => 12,
                'id' => 7,
                'name' => 'Vượng',
                'address' => 'Quận 2',
                'phone' => '0777888999',
                'is_default' => true,
                'created_at' => '2024-02-23 08:10:00',
                'updated_at'=> null
            ],
            [
                'id_consignees' => 13,
                'id' => 8,
                'name' => 'Trinh',
                'address' => 'Quận 4',
                'phone' => '08765465738',
                'is_default' => false,
                'created_at' => '2024-02-23 08:10:00',
                'updated_at'=> null
            ],
            [
                'id_consignees' => 14,
                'id' => 8,
                'name' => 'Văn',
                'address' => 'Quận 6, Hồ Chí Minh',
                'phone' => '0958672345',
                'is_default' => true,
                'created_at' => '2024-02-23 08:10:00',
                'updated_at'=> null
            ],
            [
                'id_consignees' => 15,
                'id' => 9,
                'name' => 'Toàn',
                'address' => 'Quận 7, Hồ Chí Minh',
                'phone' => '0675838475',
                'is_default' => false,
                'created_at' => '2024-02-23 08:10:00',
                'updated_at'=> null
            ],
            [
                'id_consignees' => 16,
                'id' => 9,
                'name' => 'Ta Là Quan Lão Gia',
                'address' => 'Quận 8, Hồ Chí Minh',
                'phone' => '0685847361',
                'is_default' => true,
                'created_at' => '2024-02-23 08:10:00',
                'updated_at'=> null
            ],
            [
                'id_consignees' => 17,
                'id' => 10,
                'name' => 'Bad Man',
                'address' => 'Quận 10, Hồ Chí Minh',
                'phone' => '01646576829',
                'is_default' => false,
                'created_at' => '2024-02-23 08:10:00',
                'updated_at'=> null
            ],
            [
                'id_consignees' => 18,
                'id' => 10,
                'name' => 'Sad Man',
                'address' => 'Quận 5, Hồ Chí Minh',
                'phone' => '01646576829',
                'is_default' => true,
                'created_at' => '2024-02-23 08:10:00',
                'updated_at'=> null
            ],
            [
                'id_consignees' => 19,
                'id' => 11,
                'name' => 'Long',
                'address' => 'Quận 11, Hồ Chí Minh',
                'phone' => '0987656756',
                'is_default' => false,
                'created_at' => '2024-02-23 08:10:00',
                'updated_at'=> null
            ],
            [
                'id_consignees' => 20,
                'id' => 11,
                'name' => 'Lân',
                'address' => 'Quận 12, Hồ Chí Minh',
                'phone' => '0989897675',
                'is_default' => true,
                'created_at' => '2024-02-23 08:10:00',
                'updated_at'=> null
            ]
        ]);
    }
}