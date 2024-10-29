<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\AppSetting;

class AppSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AppSetting::create([
            'title' => 'QUIPANEL PT BUILDING TECHNOLOGIES INDONESIA',
            'description' => 'merupakan salah satu merk beton ringan yang terkenal di Indonesia',
            'logo' => 'storage/images/logo_1.jpeg',
            'image' => 'storage/images/gambar_2.jpg',  // Pastikan gambar ini ada di public/storage/images
            'email' => 'info@quipanel.co.id',
            'instagram' => 'https://instagram.com/quipanel',
            'tokped' => 'https://tokopedia.com/quipanel',
            'alamat' => 'Jl. Industri No. 21, Jakarta',
            'phone' => '628123456789'  // Menambahkan nomor telepon
        ]);

        AppSetting::create([
            'title' => 'Best Architecture And Interior Design Services',
            'description' => 'Campuran dari bahan beton ringan QUIPANEL berupa campuran semen- styrofoam dan bahan kimia tertentu yang dimix sedemikian rupa sehingga menghasilkan campuran yang baik',
            'logo' => 'storage/images/logo2.png',  // Pastikan gambar ini ada di public/storage/images
            'image' => 'storage/images/gambar_3.jpg',  // Pastikan gambar ini ada di public/storage/images
            'email' => 'architecture@example.com',
            'instagram' => 'https://instagram.com/architecture',
            'tokped' => 'https://tokopedia.com/architecture',
            'alamat' => 'Jl. Kemang Raya No. 12, Jakarta',
            'phone' => '628987654321'  // Menambahkan nomor telepon
        ]);

        AppSetting::create([
            'title' => 'KEUNGGULAN',
            'description' => 'Berat jenis dinding quipanel sekitar 700kg/m3 lebih ringan daripada air. Untuk A tebal 75mm berat permeter luas sekitar 54kg, jauh lebih ringan daripada pasangan bata merah yang beratnya 200kg/m2',
            'logo' => 'storage/images/logo_4.jpg',  // Pastikan gambar ini ada di public/storage/images
            'image' => 'storage/images/gambar_4.jpg',  // Ubah menjadi gambar yang sesuai
            'email' => 'architecture@example.com',
            'instagram' => 'https://instagram.com/architecture',
            'tokped' => 'https://tokopedia.com/architecture',
            'alamat' => 'Jl. Kemang Raya No. 12, Jakarta',
            'phone' => '628987654321'  // Menambahkan nomor telepon
        ]);
    }
}
