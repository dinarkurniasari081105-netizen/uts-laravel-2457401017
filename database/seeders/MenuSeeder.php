<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menus')->insert([
            ['name' => 'Nasi Goreng Spesial', 'category' => 'Makanan Utama', 'code' => 'MKN-001', 'price' => 25000, 'is_available' => true, 'description' => 'Nasi goreng dengan telur, ayam suwir, dan kerupuk', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Mie Goreng Seafood', 'category' => 'Makanan Utama', 'code' => 'MKN-002', 'price' => 28000, 'is_available' => true, 'description' => 'Mie goreng dengan udang, cumi, dan bakso ikan', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Ayam Bakar Madu', 'category' => 'Makanan Utama', 'code' => 'MKN-003', 'price' => 32000, 'is_available' => true, 'description' => 'Ayam bakar bumbu madu manis gurih', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Sate Ayam Madura', 'category' => 'Makanan Utama', 'code' => 'MKN-004', 'price' => 22000, 'is_available' => false, 'description' => '10 tusuk sate ayam dengan bumbu kacang kental', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Gado-Gado Betawi', 'category' => 'Makanan Utama', 'code' => 'MKN-005', 'price' => 18000, 'is_available' => true, 'description' => 'Sayuran rebus segar dengan siraman bumbu kacang khas', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Soto Ayam Lamongan', 'category' => 'Makanan Utama', 'code' => 'MKN-006', 'price' => 20000, 'is_available' => true, 'description' => 'Soto ayam kuah kuning bening dengan taburan koya', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Rendang Sapi Padang', 'category' => 'Makanan Utama', 'code' => 'MKN-007', 'price' => 35000, 'is_available' => true, 'description' => 'Daging sapi empuk dimasak bumbu rendang otentik', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'French Fries (Kentang Goreng)', 'category' => 'Makanan Ringan', 'code' => 'RNG-001', 'price' => 15000, 'is_available' => true, 'description' => 'Kentang goreng renyah dengan taburan garam gurih', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Cireng Bumbu Rujak', 'category' => 'Makanan Ringan', 'code' => 'RNG-002', 'price' => 12000, 'is_available' => true, 'description' => 'Cireng goreng renyah dengan cocolan saus rujak pedas manis', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Roti Bakar Cokelat Keju', 'category' => 'Makanan Ringan', 'code' => 'RNG-003', 'price' => 18000, 'is_available' => true, 'description' => 'Roti bakar dengan isian meses cokelat dan parutan keju melimpah', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Pisang Goreng Keju', 'category' => 'Makanan Ringan', 'code' => 'RNG-004', 'price' => 14000, 'is_available' => true, 'description' => 'Pisang goreng krispi dengan parutan keju dan susu kental manis', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Dimsum Ayam', 'category' => 'Makanan Ringan', 'code' => 'RNG-005', 'price' => 16000, 'is_available' => true, 'description' => '4 pcs dimsum ayam hangat disajikan dengan saus sambal', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Es Teh Manis', 'category' => 'Minuman', 'code' => 'MNM-001', 'price' => 5000, 'is_available' => true, 'description' => 'Teh seduh segar dengan gula murni dan es batu', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Jus Alpukat', 'category' => 'Minuman', 'code' => 'MNM-002', 'price' => 15000, 'is_available' => true, 'description' => 'Jus alpukat kental dengan siraman susu cokelat', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Es Kopi Susu Gula Aren', 'category' => 'Minuman', 'code' => 'MNM-003', 'price' => 18000, 'is_available' => true, 'description' => 'Kopi espresso dengan susu segar dan sirup gula aren asli', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Lemon Tea Hangat', 'category' => 'Minuman', 'code' => 'MNM-004', 'price' => 8000, 'is_available' => true, 'description' => 'Kombinasi teh hangat dan perasan jeruk lemon segar', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Milkshake Strawberry', 'category' => 'Minuman', 'code' => 'MNM-005', 'price' => 17000, 'is_available' => true, 'description' => 'Susu kocok rasa stroberi dengan es krim vanila di atasnya', 'created_at' => now(), 'updated_at' => now()]
        ]);
    }
}
