<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'penjualan_id' => 1,
                'user_id' => '1',
                'pembeli' => 'F0001',
                'penjualan_kode' => 'F0001',
                'penjualan_tanggal' => '1990-02-22', // Format tanggal yang benar: YYYY-MM-DD
            ],
            [
                'penjualan_id' => 2,
                'user_id' => '2',
                'pembeli' => 'F0002',
                'penjualan_kode' => 'F0002',
                'penjualan_tanggal' => '1990-02-22',
            ],
            [
                'penjualan_id' => 3,
                'user_id' => '3',
                'pembeli' => 'F0003',
                'penjualan_kode' => 'F0003',
                'penjualan_tanggal' => '1990-02-22',
            ],
            [
                'penjualan_id' => 4,
                'user_id' => '4',
                'pembeli' => 'F0004',
                'penjualan_kode' => 'F0004',
                'penjualan_tanggal' => '1990-02-22',
            ],
            [
                'penjualan_id' => 5,
                'user_id' => '5',
                'pembeli' => 'F0005',
                'penjualan_kode' => 'F0005',
                'penjualan_tanggal' => '1990-02-22',
            ],
            [
                'penjualan_id' => 6,
                'user_id' => '6',
                'pembeli' => 'F0006',
                'penjualan_kode' => 'F0006',
                'penjualan_tanggal' => '1990-02-22',
            ],
            [
                'penjualan_id' => 7,
                'user_id' => '7',
                'pembeli' => 'F0007',
                'penjualan_kode' => 'F0007',
                'penjualan_tanggal' => '1990-02-22',
            ],
            [
                'penjualan_id' => 8,
                'user_id' => '8',
                'pembeli' => 'F0008',
                'penjualan_kode' => 'F0008',
                'penjualan_tanggal' => '1990-02-22',
            ],
            [
                'penjualan_id' => 9,
                'user_id' => '9',
                'pembeli' => 'F0009',
                'penjualan_kode' => 'F0009',
                'penjualan_tanggal' => '1990-02-22',
            ],
        ];
        DB::table('t_penjualan')->insert($data);
    }
}