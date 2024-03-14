<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $categories = [
            ['name' => 'Category1'],
            ['name' => 'Category2'],
            ['name' => 'Category3'],
            ['name' => 'Category4'],
            ['name' => 'Category5'],
        ];

        //générer les catégories avec name et slug
        foreach ($categories as $category) {
            $category['slug'] = Str::slug($category['name']);
            $category['is_visible'] = true;
            $category['created_at'] = now();
            $category['updated_at'] = now();
            DB::table('categories')->insert($category);
        }
    }

    // public function run()
    // {
    //     // Supprimer les données existantes de la table
    //     Category::truncate();

    //     // Utiliser la factory pour créer 5 catégories de manière aléatoire
    //     \App\Models\Category::factory(5)->create();
    // }
}
