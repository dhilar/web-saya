<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Product::create([
            'category' => 'Dinding',
            'name' => 'Dinding 35 x 600 x 3000',
            'code' => 'D35-300',
            'image' => 'storage/images/gambar_2.jpg',
            'price' => 278000,
            'specification' => 'Standar (berat ± 56 kg)',
            'advantages' => 'Ringan, tahan lama, mudah dipasang', // Keunggulan produk
            'video_url' => 'https://www.youtube.com/embed/wR5KYHQ-vxU' // Ganti dengan format embed
        ]);

        Product::create([
            'category' => 'Dinding',
            'name' => 'Dinding 50 x 600 x 2400',
            'code' => 'D50-240',
            'image' => 'storage/images/gambar_2.jpg',
            'price' => 285000,
            'specification' => 'Standar (berat ± 58 kg)',
            'advantages' => 'Ringan, tahan lama, mudah dipasang', // Keunggulan produk
            'video_url' => 'https://www.youtube.com/embed/wR5KYHQ-vxU' // Ganti dengan format embed
        ]);
    }
}
