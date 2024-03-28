<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class KategoriSeeder extends Seeder
{
    
    public function run(): void
    {
        $data = [
            ['kategori_id' => 1, 'kategori_nama'=>'Makanan', 'kategori_kode' => '1' ],
            ['kategori_id' => 2, 'kategori_nama'=>'Minuman', 'kategori_kode' => '2' ],
            ['kategori_id' => 3, 'kategori_nama'=>'Snack', 'kategori_kode' => '3' ],
            ['kategori_id' => 4, 'kategori_nama'=>'Peralatan', 'kategori_kode' => '4'],
            ['kategori_id' => 5, 'kategori_nama'=>'Lain-lain', 'kategori_kode' => '5'],


        ];
        DB::table('m_kategori')->insert($data);
    }
}
