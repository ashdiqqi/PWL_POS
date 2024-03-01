<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualandetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $penjualan_details = [];

// Generate 30 penjualan_detail records
for ($i = 1; $i <= 30; $i++) {
    // Set penjualan_id
    $penjualan_id = $i;

    // Set 3 random barang_id untuk setiap penjualan
    $barang_ids = range(1, 10); // Assuming there are 10 barang in the database
    shuffle($barang_ids);
    $barang_ids = array_slice($barang_ids, 0, 3);

    // Generate penjualan_detail for each barang_id
    foreach ($barang_ids as $barang_id) {
        $penjualan_details[] = [
            'detail_id' => ($i - 1) * 3 + $barang_id, // Generate unique detail_id
            'penjualan_id' => $penjualan_id,
            'barang_id' => $barang_id,
            'harga' => rand(1000, 10000), // Random harga for each barang
            'jumlah' => rand(1, 10), // Random jumlah for each barang
        ];
    }
}

// Simpan data ke dalam database
foreach ($penjualan_details as $penjualan_detail) {
    DB::table('t_penjualan_detail')->insert($penjualan_detail);
}

    }
}
