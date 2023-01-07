<?php

namespace Database\Seeders;

use App\Models\Pengaduan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PengaduanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pengaduan::create(
            [
                'user_id' => '1',
                'namaBarang' => 'Dompet',
                'jumlahBarang' => '1',
                'lokasiTerakhir' => 'Sukapura',
                'kontak' => '088',
                'deskripsi' => 'blabla',
                'image' => 'diawur.jpg'
            ],
            [
                'user_id' => '2',
                'namaBarang' => 'Tas',
                'jumlahBarang' => '2',
                'lokasiTerakhir' => 'Sukabirus',
                'kontak' => '08999',
                'deskripsi' => 'blabla',
                'image' => 'diawur.jpg'
            ],
        );
    }
}
