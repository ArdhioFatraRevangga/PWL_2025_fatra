<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TPenjualanSeeder extends Seeder
{
    public function run(): void
    {
        for ($i = 0; $i < 5; $i++) {
            DB::table('t_penjualan')->insert([
                'tanggal' => now()->subDays($i),
                'total' => 0, // akan diupdate setelah detail dimasukkan
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
