<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['kategori_id' => 1,
            'kategori_kode' => 'FNB',
            'kategori_nama' => 'Food and Beverage'
            ],
            ['kategori_id' => 2,
            'kategori_kode' => 'ELC',
            'kategori_nama'=> 'Electronic'
            ],
            ['kategori_id' =>3,
            'kategori_kode'=> 'CLO',
            'kategori_nama'=> 'Clothing'
            ],
            ['kategori_id'=> 4,
            'kategori_kode'=>'ST0',
            'kategori_nama'=>'Stationery'
            ],
            [
            'kategori_id' => 5,
            'kategori_kode'=> 'BPC',
            'kategori_nama'=> 'Beauty & Personal Care'
            ],
        
        ]; 
        DB::table('m_kategori')->insert($data);
    }
}
