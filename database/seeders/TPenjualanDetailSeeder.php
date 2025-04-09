<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TPenjualanDetailSeeder extends Seeder
{
    public function run(): void
    {
        $penjualan = DB::table('t_penjualan')->get();
        $barangList = DB::table('m_barang')->get();

        foreach ($penjualan as $penj) {
            $total = 0;
            // Masukkan 2-4 item per penjualan
            $items = $barangList->random(rand(2, 4));

            foreach ($items as $item) {
                $jumlah = fake()->numberBetween(1, 5);
                $harga = $item->harga;
                $subtotal = $jumlah * $harga;

                DB::table('t_penjualan_detail')->insert([
                    'penjualan_id' => $penj->penjualan_id,
                    'barang_id' => $item->barang_id,
                    'jumlah' => $jumlah,
                    'harga' => $harga,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);

                $total += $subtotal;
            }

            DB::table('t_penjualan')->where('penjualan_id', $penj->penjualan_id)->update(['total' => $total]);
        }
    }
}
