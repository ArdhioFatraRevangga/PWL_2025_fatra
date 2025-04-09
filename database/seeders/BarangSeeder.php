<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    public function run(): void
    {
        $data = [];

        for ($i = 1; $i <= 10; $i++) {
            $data[] = [
                'nama_barang' => "Barang $i",
                'kategori_id' => rand(1, 5), // Asumsikan m_kategori punya ID 1-5
                'harga'       => rand(1000, 50000),
                'stok'        => rand(10, 100),
            ];
        }

        DB::table('m_barang')->insert($data);
    }
}
