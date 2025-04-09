<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TStokSeeder extends Seeder
{
    public function run(): void
    {
        $barang = DB::table('m_barang')->get();

        foreach ($barang as $b) {
            DB::table('t_stok')->insert([
                'barang_id' => $b->id,
                'jumlah' => fake()->numberBetween(10, 100),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
