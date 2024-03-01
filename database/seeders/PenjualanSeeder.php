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
                'user_id' => 1,
                'pembeli' => 'John Doe',
                'penjualan_kode' => 'PJN001',
                'penjualan_tanggal' => '2024-03-01',
            ],
            [
                'penjualan_id' => 2,
                'user_id' => 2,
                'pembeli' => 'Jane Smith',
                'penjualan_kode' => 'PJN002',
                'penjualan_tanggal' => '2024-03-01',
            ],
            [
                'penjualan_id' => 3,
                'user_id' => 3,
                'pembeli' => 'Michael Johnson',
                'penjualan_kode' => 'PJN003',
                'penjualan_tanggal' => '2024-03-02',
            ],
            [
                'penjualan_id' => 4,
                'user_id' => 1,
                'pembeli' => 'Emily Brown',
                'penjualan_kode' => 'PJN004',
                'penjualan_tanggal' => '2024-03-02',
            ],
            [
                'penjualan_id' => 5,
                'user_id' => 2,
                'pembeli' => 'David Wilson',
                'penjualan_kode' => 'PJN005',
                'penjualan_tanggal' => '2024-03-03',
            ],
            [
                'penjualan_id' => 6,
                'user_id' => 3,
                'pembeli' => 'Olivia Martinez',
                'penjualan_kode' => 'PJN006',
                'penjualan_tanggal' => '2024-03-03',
            ],
            [
                'penjualan_id' => 7,
                'user_id' => 1,
                'pembeli' => 'Daniel Anderson',
                'penjualan_kode' => 'PJN007',
                'penjualan_tanggal' => '2024-03-04',
            ],
            [
                'penjualan_id' => 8,
                'user_id' => 2,
                'pembeli' => 'Sophia Taylor',
                'penjualan_kode' => 'PJN008',
                'penjualan_tanggal' => '2024-03-04',
            ],
            [
                'penjualan_id' => 9,
                'user_id' => 3,
                'pembeli' => 'Matthew Thomas',
                'penjualan_kode' => 'PJN009',
                'penjualan_tanggal' => '2024-03-05',
            ],
            [
                'penjualan_id' => 10,
                'user_id' => 1,
                'pembeli' => 'Chloe Jackson',
                'penjualan_kode' => 'PJN010',
                'penjualan_tanggal' => '2024-03-05',
            ],
        ];
        DB::table('t_penjualan')->insert($data); 
    }
}
