<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class StockSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            ['stock_id' => 1, 'barang_id' => '1', 'user_id' => '1', 'stock_tanggal' => date('Y-m-d H:i:s', strtotime('22-02-1990')), 'stock_jumlah' => '1'],
            ['stock_id' => 2, 'barang_id' => '2', 'user_id' => '2', 'stock_tanggal' => date('Y-m-d H:i:s', strtotime('22-02-1990')), 'stock_jumlah' => '2'],
            ['stock_id' => 3, 'barang_id' => '3', 'user_id' => '3', 'stock_tanggal' => date('Y-m-d H:i:s', strtotime('22-02-1990')), 'stock_jumlah' => '3'],
            ['stock_id' => 4, 'barang_id' => '4', 'user_id' => '4', 'stock_tanggal' => date('Y-m-d H:i:s', strtotime('22-02-1990')), 'stock_jumlah' => '4'],
            ['stock_id' => 5, 'barang_id' => '5', 'user_id' => '5', 'stock_tanggal' => date('Y-m-d H:i:s', strtotime('22-02-1990')), 'stock_jumlah' => '5'],
            ['stock_id' => 6, 'barang_id' => '6', 'user_id' => '6', 'stock_tanggal' => date('Y-m-d H:i:s', strtotime('22-02-1990')), 'stock_jumlah' => '6'],
            ['stock_id' => 7, 'barang_id' => '7', 'user_id' => '7', 'stock_tanggal' => date('Y-m-d H:i:s', strtotime('22-02-1990')), 'stock_jumlah' => '7'],
            ['stock_id' => 8, 'barang_id' => '8', 'user_id' => '8', 'stock_tanggal' => date('Y-m-d H:i:s', strtotime('22-02-1990')), 'stock_jumlah' => '8'],
            ['stock_id' => 9, 'barang_id' => '9', 'user_id' => '9', 'stock_tanggal' => date('Y-m-d H:i:s', strtotime('22-02-1990')), 'stock_jumlah' => '9'],
            ['stock_id' => 10, 'barang_id' => '10', 'user_id' => '10', 'stock_tanggal' => date('Y-m-d H:i:s', strtotime('22-02-1990')), 'stock_jumlah' => '10'],
            ['stock_id' => 11, 'barang_id' => '11', 'user_id' => '11', 'stock_tanggal' => date('Y-m-d H:i:s', strtotime('22-02-1990')), 'stock_jumlah' => '11'],
            ['stock_id' => 12, 'barang_id' => '12', 'user_id' => '12', 'stock_tanggal' => date('Y-m-d H:i:s', strtotime('22-02-1990')), 'stock_jumlah' => '12'],
        ];
        DB::table('t_stock')->insert($data);
    }
}
