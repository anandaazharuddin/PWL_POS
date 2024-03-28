<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
   
    public function run(): void
    {
        $data=[
            [
                'barang_id' => 1,
                'kategori_id' => 1,
                'barang_kode' => 'BRG001',
                'barang_nama' => 'Nasi Goreng',
                'harga_beli' => 15000,
                'harga_jual' => 20000,
            ],
            [
                'barang_id' => 2,
                'kategori_id' => 1,
                'barang_kode' => 'BRG002',
                'barang_nama' => 'Mie Goreng',
                'harga_beli' => 10000,
                'harga_jual' => 15000,
            ],
            [
                'barang_id' => 3,
                'kategori_id' => 2,
                'barang_kode' => 'BRG003',
                'barang_nama' => 'Es Teh',
                'harga_beli' => 5000,
                'harga_jual' => 7000,
            ],
            [
                'barang_id' => 4,
                'kategori_id' => 2,
                'barang_kode' => 'BRG004',
                'barang_nama' => 'Es Jeruk',
                'harga_beli' => 6000,
                'harga_jual' => 8000,
            ],
            [
                'barang_id' => 5,
                'kategori_id' => 3,
                'barang_kode' => 'BRG005',
                'barang_nama' => 'Kerupuk',
                'harga_beli' => 3000,
                'harga_jual' => 5000,
            ],
            [
                'barang_id' => 6,
                'kategori_id' => 3,
                'barang_kode' => 'BRG006',
                'barang_nama' => 'Permen',
                'harga_beli' => 2000,
                'harga_jual' => 3000,
            ],
            [
                'barang_id' => 7,
                'kategori_id' => 4,
                'barang_kode' => 'BRG007',
                'barang_nama' => 'Piring',
                'harga_beli' => 5000,
                'harga_jual' => 7000,
            ],
            [
                'barang_id' => 8,
                'kategori_id' => 4,
                'barang_kode' => 'BRG008',
                'barang_nama' => 'Gelas',
                'harga_beli' => 4000,
                'harga_jual' => 6000,
            ],
            [
                'barang_id' => 9,
                'kategori_id' => 5,
                'barang_kode' => 'BRG009',
                'barang_nama' => 'Sabun',
                'harga_beli' => 10000,
                'harga_jual' => 12000,
            ],
            [
                'barang_id' => 10,
                'kategori_id' => 5,
                'barang_kode' => 'BRG010',
                'barang_nama' => 'Shampoo',
                'harga_beli' => 15000,
                'harga_jual' => 17000,
            ],
            [
                'barang_id' => 11, 
                'barang_kode' => 'BRG011',
                'barang_nama' => 'Shampoo',
                'harga_beli' => 15000,
                'harga_jual' => 17000,
            ],
            [
                'barang_id' => 12,
                'kategori_id' => 5,
                'barang_kode' => 'BRG012',
                'barang_nama' => 'Shampoo',
                'harga_beli' => 15000,
                'harga_jual' => 17000,
            ],
        ];
        DB::table('m_barang')->insert($data);
    }
}