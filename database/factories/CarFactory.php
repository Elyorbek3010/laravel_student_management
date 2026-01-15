<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'model' => fake()->randomElement([
                'Toyota',
                'Honda',
                'BMW',
                'Tesla',
                'Ford',
                'Audi',
                'Rolls Royce',
                'Aston Martin',
                'Pagani'
            ]),
            'year'=>fake()->year(),
            'price'=>fake()->randomFloat()
        ];
    }
}
