<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    public function run(): void
    {
        $data = [];
        for ($i = 1; $i <= 10; $i++) {
            $data[] = [
                'kategori_id' => rand(1, 5),
                'user_id' => 1,
                'barang_kode' => 'BRG0' . $i,
                'barang_nama' => 'Barang ' . $i,
                'harga_beli' => rand(5000, 20000),
                'harga_jual' => rand(25000, 50000),
            ];
        }

        DB::table('m_barang')->insert($data);
    }
}
