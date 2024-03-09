<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(UsersSeeder::class);
        $this->call(StoresSeeder::class);
        $this->call(CategoriesBlogSeeder::class);
        $this->call(BlogsSeeder::class);
        $this->call(ConsigneesSeeder::class);
        $this->call(PaysSeeder::class);
        $this->call(FollowsSeeder::class);
        $this->call(CategoriesSeeder::class);
        $this->call(ProductsSeeder::class);
        $this->call(LikesSeeder::class);
        $this->call(ProductVariationsSeeder::class);
        $this->call(NotificationsSeeder::class);
    }
}