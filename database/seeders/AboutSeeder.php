<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\About;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        About::create([
            'title' => 'A Creative Architecture Agency For Your Dream Home',
            'description' => 'Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos.',
            'image' => 'storage/images/gambar_2.jpg',
            'years_of_experience' => 24
        ]);
    }
}
