<?php

namespace Database\Factories;

use Faker\Generator;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => '車'. $this->faker->randomNumber,
            'company_id' => $this->faker->numberBetween(1,100),
            'cc' => $this->faker->randomNumber,
            'sale_date' => $this->faker->date(),
            'memo' => $this->faker->realText(100),
            'image_url' => null,
        ];
    }
}
