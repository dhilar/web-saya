<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Team;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Team::create([
            'nama' => 'John Doe',
            'jabatan' => 'Lead Architect',
            'image' => 'storage/images/gambar_11.jpg',
            'facebook_link' => 'https://facebook.com/johndoe',
            'twitter_link' => 'https://twitter.com/johndoe',
            'instagram_link' => 'https://instagram.com/johndoe',
        ]);

        Team::create([
            'nama' => 'Jane Smith',
            'jabatan' => 'Senior Designer',
            'image' => 'storage/images/gambar_12.jpg',
            'facebook_link' => 'https://facebook.com/janesmith',
            'twitter_link' => 'https://twitter.com/janesmith',
            'instagram_link' => 'https://instagram.com/janesmith',
        ]);

        
    }
}
