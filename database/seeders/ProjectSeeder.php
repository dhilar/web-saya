<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Project::create([
            'title' => 'Modern Complex',
            'image' => 'img/project-1.jpg',
            'description' => 'Description of Modern Complex...',
        ]);

        Project::create([
            'title' => 'Royal Hotel',
            'image' => 'img/project-2.jpg',
            'description' => 'Description of Royal Hotel...',
        ]);

        Project::create([
            'title' => 'Royal Hotel',
            'image' => 'img/project-2.jpg',
            'description' => 'Description of Royal Hotel...',
        ]);


        Project::create([
            'title' => 'Royal Hotel',
            'image' => 'img/project-2.jpg',
            'description' => 'Description of Royal Hotel...',
        ]);
    }
}
