<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Electronique',
                'slug' => Str::slug('Electronique'),
                'description' => 'Découvrez notre sélection de smartphones, ordinateurs et accessoires électroniques.',
                'is_active' => true,
            ],

            [
                'name' => 'Mode',
                'slug' => Str::slug('Mode') ,
                'description' => 'Découvrez notre sélection de t-shirt , costume et jean de marque.',
                'is_active' => true,
            ],

            [
                'name' => 'Jeux Vidéo',
                'slug' => Str::slug('Jeux Vidéo'),
                'description' => 'Découvrez notre sélection de XBOX, PS5, Nintendo, Switch.',
                'is_active' => true,
            ]
        ];

        foreach ($categories as $category) {
            category::FirstOrCreate(
                ['slug' => $category['slug']],
                $category
            );
        }
    }
} 
