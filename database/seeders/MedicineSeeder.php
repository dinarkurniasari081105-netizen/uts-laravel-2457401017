<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MedicineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('medicines')->insert([
            ['name' => 'Paracetamol 500mg', 'category' => 'Obat Bebas', 'code' => 'PCT-001', 'expired_at' => '2028-12-01', 'price' => 5000, 'stock' => 100, 'is_prescription_required' => false, 'description' => 'Meredakan demam dan sakit kepala', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Amoxicillin 500mg', 'category' => 'Obat Keras', 'code' => 'AMX-002', 'expired_at' => '2027-06-15', 'price' => 12000, 'stock' => 50, 'is_prescription_required' => true, 'description' => 'Antibiotik untuk infeksi bakteri', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Decolgen Tablet', 'category' => 'Obat Bebas Terbatas', 'code' => 'DCG-003', 'expired_at' => '2028-03-20', 'price' => 8000, 'stock' => 80, 'is_prescription_required' => false, 'description' => 'Meredakan gejala flu dan batuk', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Asam Mefenamat 500mg', 'category' => 'Obat Keras', 'code' => 'ASM-004', 'expired_at' => '2027-09-10', 'price' => 7000, 'stock' => 60, 'is_prescription_required' => true, 'description' => 'Meredakan nyeri ringan hingga sedang', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Promag Tablet', 'category' => 'Obat Bebas', 'code' => 'PMG-005', 'expired_at' => '2029-01-11', 'price' => 9000, 'stock' => 120, 'is_prescription_required' => false, 'description' => 'Meredakan sakit maag dan kembung', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Cefadroxil 500mg', 'category' => 'Obat Keras', 'code' => 'CFR-006', 'expired_at' => '2027-04-18', 'price' => 25000, 'stock' => 40, 'is_prescription_required' => true, 'description' => 'Antibiotik infeksi saluran kemih', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'CTM Tablet', 'category' => 'Obat Bebas Terbatas', 'code' => 'CTM-007', 'expired_at' => '2028-08-25', 'price' => 3000, 'stock' => 200, 'is_prescription_required' => false, 'description' => 'Antialergi dan meredakan gatal', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Metformin 500mg', 'category' => 'Obat Keras', 'code' => 'MTF-008', 'expired_at' => '2027-11-30', 'price' => 15000, 'stock' => 70, 'is_prescription_required' => true, 'description' => 'Obat untuk diabetes melitus tipe 2', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Bodrex Tablet', 'category' => 'Obat Bebas', 'code' => 'BDX-009', 'expired_at' => '2028-05-05', 'price' => 4500, 'stock' => 150, 'is_prescription_required' => false, 'description' => 'Meredakan sakit kepala dan sakit gigi', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Betadine Solution 30ml', 'category' => 'Obat Bebas Terbatas', 'code' => 'BTD-010', 'expired_at' => '2029-07-22', 'price' => 18000, 'stock' => 90, 'is_prescription_required' => false, 'description' => 'Antiseptik untuk luka luar', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Simvastatin 10mg', 'category' => 'Obat Keras', 'code' => 'SVT-011', 'expired_at' => '2027-08-14', 'price' => 11000, 'stock' => 85, 'is_prescription_required' => true, 'description' => 'Menurunkan kadar kolesterol jahat', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Antimo Tablet', 'category' => 'Obat Bebas Terbatas', 'code' => 'ATM-012', 'expired_at' => '2028-10-10', 'price' => 6000, 'stock' => 110, 'is_prescription_required' => false, 'description' => 'Mengegah mabuk perjalanan', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Amlodipine 5mg', 'category' => 'Obat Keras', 'code' => 'ALD-013', 'expired_at' => '2027-12-25', 'price' => 8500, 'stock' => 95, 'is_prescription_required' => true, 'description' => 'Obat penurun tekanan darah tinggi', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Dextromethorphan Sirup', 'category' => 'Obat Bebas Terbatas', 'code' => 'DMP-014', 'expired_at' => '2028-04-01', 'price' => 14000, 'stock' => 65, 'is_prescription_required' => false, 'description' => 'Meredakan batuk kering', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Cataflam 50mg', 'category' => 'Obat Keras', 'code' => 'CTL-015', 'expired_at' => '2027-05-20', 'price' => 38000, 'stock' => 30, 'is_prescription_required' => true, 'description' => 'Meredakan nyeri radang sendi', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Diapet Kapsul', 'category' => 'Obat Bebas', 'code' => 'DPT-016', 'expired_at' => '2029-02-18', 'price' => 7500, 'stock' => 130, 'is_prescription_required' => false, 'description' => 'Meredakan diare', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Salbutil 2mg', 'category' => 'Obat Keras', 'code' => 'SBT-017', 'expired_at' => '2027-10-05', 'price' => 10000, 'stock' => 75, 'is_prescription_required' => true, 'description' => 'Meredakan gejala sesak asma', 'created_at' => now(), 'updated_at' => now()]
        ]);
    }
}
