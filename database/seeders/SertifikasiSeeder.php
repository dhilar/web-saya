<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Sertifikasi; // Pastikan ini ditambahkan untuk import model

class SertifikasiSeeder extends Seeder
{
    public function run(): void
    {
        Sertifikasi::create([ // Perbaikan di sini
            'title' => 'QUIPANEL',
            'description' => 'QUIPANEL telah diuji baik secara internal maupun external yaitu di Laboratorium Sucofindo maupun Puskim Bandung. Uji yang dilakukan meliputi :
            Kuat Lentur (Flexure Strength)
            Kuat Tekan (Compressive Strength)
            Axial Load
            Kedap suara
            Uji Kebakaran
            Uji kerapatan
            Uji cabut paku dan dynabolt
            Uji rambatan panas
            Uji beban lantai',
        ]);
    }
}
