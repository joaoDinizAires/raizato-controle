<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\Supplier;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    protected $model = Product::class;

    public function definition()
    {
        return [
            'name' => $this->faker->word,
            'description' => $this->faker->sentence,
            'code' => strtoupper($this->faker->bothify('??####')),
            'sale_price' => $this->faker->randomFloat(2, 10, 1000),
            'cost_price' => $this->faker->randomFloat(2, 5, 500),
            'quantity' => $this->faker->numberBetween(1, 100),
            'supplier_id' => Supplier::factory(),
            'expiration_date' => $this->faker->optional()->dateTimeBetween('now', '+2 years'),
        ];
    }
}
