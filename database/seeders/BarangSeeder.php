<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data =   [
            [
                'barang_id' => 1,
                'kategori_id' => 1,
                'barang_kode' => 'FNB001',
                'barang_nama' => 'Mineral Water',
                'harga_jual' => 5000,
                'harga_beli' => 3000,
            ],
            [
                'barang_id' => 2,
                'kategori_id' => 1,
                'barang_kode' => 'FNB002',
                'barang_nama' => 'Rice',
                'harga_jual' => 10000,
                'harga_beli' => 7000,
            ],
            // Kategori: Electronic
            [
                'barang_id' => 3,
                'kategori_id' => 2,
                'barang_kode' => 'ELC001',
                'barang_nama' => 'Smartphone',
                'harga_jual' => 5000000,
                'harga_beli' => 4000000,
            ],
            [
                'barang_id' => 4,
                'kategori_id' => 2,
                'barang_kode' => 'ELC002',
                'barang_nama' => 'Laptop',
                'harga_jual' => 10000000,
                'harga_beli' => 8000000,
            ],
            // Kategori: Clothing
            [
                'barang_id' => 5,
                'kategori_id' => 3,
                'barang_kode' => 'CLO001',
                'barang_nama' => 'T-Shirt',
                'harga_jual' => 50000,
                'harga_beli' => 35000,
            ],
            [
                'barang_id' => 6,
                'kategori_id' => 3,
                'barang_kode' => 'CLO002',
                'barang_nama' => 'Jeans',
                'harga_jual' => 80000,
                'harga_beli' => 60000,
            ],
            // Kategori: Stationery
            [
                'barang_id' => 7,
                'kategori_id' => 4,
                'barang_kode' => 'STO001',
                'barang_nama' => 'Notebook',
                'harga_jual' => 20000,
                'harga_beli' => 15000,
            ],
            [
                'barang_id' => 8,
                'kategori_id' => 4,
                'barang_kode' => 'STO002',
                'barang_nama' => 'Pen',
                'harga_jual' => 5000,
                'harga_beli' => 3000,
            ],
            // Kategori: Beauty & Personal Care
            [
                'barang_id' => 9,
                'kategori_id' => 5,
                'barang_kode' => 'BPC001',
                'barang_nama' => 'Shampoo',
                'harga_jual' => 25000,
                'harga_beli' => 18000,
            ],
            [
                'barang_id' => 10,
                'kategori_id' => 5,
                'barang_kode' => 'BPC002',
                'barang_nama' => 'Toothpaste',
                'harga_jual' => 10000,
                'harga_beli' => 7000,
            ],
        ];
        DB::table('m_barang')->insert($data);
    }
}
