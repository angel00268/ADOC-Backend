<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->words(3, true),
            'description' => $this->faker->optional()->paragraph(),
            'price' => $this->faker->randomFloat(2, 10, 1000),
            'stock' => $this->faker->numberBetween(0, 100),
            'model' => $this->faker->bothify('Model-###??'),
            'sizes' => json_encode($this->faker->randomElements([5, 6, 7, 8, 9, 10], $this->faker->numberBetween(1, 6))),
            'colors' => json_encode($this->faker->randomElements(['Rojo', 'Azul', 'Cafe', 'Blanco', 'Negro'], $this->faker->numberBetween(1, 5))),
            'active' => $this->faker->boolean(),
        ];
    }
}
