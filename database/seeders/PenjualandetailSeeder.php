<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualandetailSeeder extends Seeder
{
    
    public function run(): void
    {
        $data = [
            [
                'detail_id' => 1,
                'id_Penjualan' => 1,
                'barang_id' => 1,
                'harga' => 10000,
                'jumlah' => 2,
            ],
            [
                'detail_id' => 2,
                'id_Penjualan' => 2,
                'barang_id' => 2,
                'harga' => 15000,
                'jumlah' => 3,
            ],
            [
                'detail_id' => 3,
                'id_Penjualan' => 3,
                'barang_id' => 3,
                'harga' => 20000,
                'jumlah' => 1,
            ],
            [
                'detail_id' => 4,
                'id_Penjualan' => 4,
                'barang_id' => 4,
                'harga' => 12000,
                'jumlah' => 5,
            ],
            [
                'detail_id' => 5,
                'id_Penjualan' => 5,
                'barang_id' => 5,
                'harga' => 8000,
                'jumlah' => 2,
            ],
            [
                'detail_id' => 6,
                'id_Penjualan' => 6,
                'barang_id' => 6,
                'harga' => 18000,
                'jumlah' => 3,
            ],
            [
                'detail_id' => 7,
                'id_Penjualan' => 7,
                'barang_id' => 7,
                'harga' => 25000,
                'jumlah' => 1,
            ],
           

        ];
        DB::table('t_penjualan_detail')->insert($data);

    }
}