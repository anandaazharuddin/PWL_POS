<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class CategorySeeder extends Seeder
{
    
    public function run(): void
    {
        $data = [
            ['category_id' => 1, 'category_nama'=>'Makanan', 'category_kode' => '1' ],
            ['category_id' => 2, 'category_nama'=>'Minuman', 'category_kode' => '2' ],
            ['category_id' => 3, 'category_nama'=>'Snack', 'category_kode' => '3' ],
            ['category_id' => 4, 'category_nama'=>'Peralatan', 'category_kode' => '4'],
            ['category_id' => 5, 'category_nama'=>'Lain-lain', 'category_kode' => '5'],


        ];
        DB::table('m_category')->insert($data);
    }
}
