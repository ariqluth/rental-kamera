<?php

namespace Database\Seeders;
use App\Models\Alat;

use Illuminate\Database\Seeder;

class CreateAlat extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $alat = [
            [
               'kategori'=>'DSLR',
               'nama_alat'=>'Kamera Canon 600D',
                'speksifikasi'=>'Kelengkapan Tas Tali strep  Unit kamera Batre',
               'gambar' => 'images/fxVKD4VY1Qt8LoPuDIGK7X1wnBcngCxtUeGQkenR.jpg',
               'harga' => '20000',
               'stok' => '2',
                'users_id' => '1',
                'detailsAlat_id' => '1'
            ],
            [
                'kategori'=>'DSLR',
                'nama_alat'=>'Kamera Canon 1200D',
                'speksifikasi'=>'Kelengkapan Tas Tali strep  Unit kamera Batre',
                'gambar' => 'images/fWoDGF4DkoIJrV04XC5xseuBFORZ01jBQ0duXBhn.jpg',
                'harga' => '25000',
                'stok' => '2',
                 'users_id' => '1',
                 'detailsAlat_id' => '1'
            ],
        ];
  
        foreach ($alat as $key => $value) {
            Alat::create($value);
        }
    }
}
