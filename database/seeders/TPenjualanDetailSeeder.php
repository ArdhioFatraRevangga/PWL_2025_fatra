<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TPenjualanDetailSeeder extends Seeder
{
    public function run(): void
    {
        $penjualan = DB::table('t_penjualan')->get();
        $barang = DB::table('m_barang')->get();
        
        foreach ($penjualan as $penj) {
            $total = 0;

            $item = $barang->random();
            $jumlah = fake()->numberBetween(1, 10);
            $harga = fake()->numberBetween(10000, 50000);
            $subtotal = $jumlah * $harga;
        
            DB::table('t_penjualan_detail')->insert([
                'penjualan_id' => $penj->penjualan_id,
                'barang_id' => $item->id,
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
