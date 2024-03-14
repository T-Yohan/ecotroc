<?php

// database/factories/ProductFactory.php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    protected $model = Product::class;

    public function definition()
    {
        return [
            'name' => $this->faker->word(),
            'slug' => $this->faker->slug(2),
            'category_id' => function () {
                return \App\Models\Category::factory()->create()->id;
            },
            'description' => $this->faker->paragraph(2),
            'qty' => $this->faker->numberBetween(0, 10),
            'is_visible' => $this->faker->boolean(),
            'is_new' => $this->faker->boolean(),
            'is_best' => $this->faker->boolean(),
            'published_at' => $this->faker->date(),
        ];
    }
}
