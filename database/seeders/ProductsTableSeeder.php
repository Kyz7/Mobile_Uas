<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Nonaktifkan foreign key check sementara
        Schema::disableForeignKeyConstraints();

        // Kosongkan tabel sebelum mengisi
        DB::table('products')->truncate();

        // Tambahkan data
        DB::table('products')->insert([
            [
                'name' => 'T-Shirt',
                'price' => 199.99,
                'short_description' => 'Kaos casual untuk sehari-hari.',
                'long_description' => 'Kaos berbahan katun 100% dengan desain yang modern dan nyaman dipakai.',
                'main_image' => 'tshirt_main.jpg',
                'image2' => 'tshirt_side.jpg',
                'image3' => null,
                'category_id' => 1, // ID kategori harus sesuai
                'is_free_shipping' => true,
                'created_by' => 1, // ID user
                'updated_by' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Headphones',
                'price' => 999.99,
                'short_description' => 'Headphone berkualitas tinggi.',
                'long_description' => 'Headphone dengan suara jernih, noise cancelling, dan nyaman digunakan.',
                'main_image' => 'headphones_main.jpg',
                'image2' => 'headphones_side.jpg',
                'image3' => 'headphones_box.jpg',
                'category_id' => 2, // ID kategori harus sesuai
                'is_free_shipping' => false,
                'created_by' => 1, // ID user
                'updated_by' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        // Aktifkan kembali foreign key check
        Schema::enableForeignKeyConstraints();
    }
}
