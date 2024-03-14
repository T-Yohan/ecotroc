<?php

// database/factories/CategoryFactory.php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    protected $model = Category::class;

    public function definition()
    {
        return [
            'name' => $this->faker->word(),
            'slug' => $this->faker->unique()->slug(2),
            'description' => $this->faker->realTextBetween(60,100,3),
            'is_visible' => $this->faker->boolean(),
            // Ajoutez d'autres attributs si nécessaire
        ];
    }
}

