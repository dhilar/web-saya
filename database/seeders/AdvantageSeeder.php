<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Advantage;

class AdvantageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Advantage::create([
            'title' => 'Keunggulan 1',
            'description' => 'Deskripsi keunggulan 1. Keunggulan ini memberikan berbagai manfaat yang luar biasa.',
            'image_1' => 'img/project-1.jpg',  // Format gambar 1
            'feature_1' => 'Fitur 1 untuk Keunggulan 1',
            'image_2' => 'img/project-2.jpg',  // Format gambar 2
            'feature_2' => 'Fitur 2 untuk Keunggulan 1',
            'image_3' => 'img/project-3.jpg',  // Format gambar 3
            'feature_3' => 'Fitur 3 untuk Keunggulan 1',
            'image_4' => 'img/project-4.jpg',  // Format gambar 4
            'feature_4' => 'Fitur 4 untuk Keunggulan 1',
        ]);

        // Seeder for Keunggulan 2 (example)
        Advantage::create([
            'title' => 'Keunggulan 2',
            'description' => 'Deskripsi keunggulan 2. Ini memberikan solusi inovatif.',
            'image_1' => 'img/project-5.jpg',  // Format gambar 1
            'feature_1' => 'Fitur 1 untuk Keunggulan 2',
            'image_2' => 'img/project-6.jpg',  // Format gambar 2
            'feature_2' => 'Fitur 2 untuk Keunggulan 2',
            'image_3' => 'img/project-7.jpg',  // Format gambar 3
            'feature_3' => 'Fitur 3 untuk Keunggulan 2',
            'image_4' => 'img/project-8.jpg',  // Format gambar 4
            'feature_4' => 'Fitur 4 untuk Keunggulan 2',
        ]);
    }
}
