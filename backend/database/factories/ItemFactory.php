<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Item>
 */
class ItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'adi' => $this->faker->text(30),
            'miktar'=> rand(1,20),
            'fiyat'=> rand(1,100),
            'renk'=> $this->faker->colorName(),
            'agirlik'=> rand(1,5)
        ];
    }
}
