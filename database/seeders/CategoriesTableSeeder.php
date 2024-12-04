<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            [
                'name' => 'Fashion',
                'icon' => 'fashion-icon.png',
                'slug' => 'fashion',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Electronic',
                'icon' => 'electronic-icon.png',
                'slug' => 'electronic',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Mainan',
                'icon' => 'mainan-icon.png',
                'slug' => 'mainan',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Aksesoris',
                'icon' => 'aksesoris-icon.png',
                'slug' => 'aksesoris',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Antik',
                'icon' => 'antik-icon.png',
                'slug' => 'antik',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
