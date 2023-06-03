<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(3),
            'image' => 'images/book1.png',
            'description' =>$this->faker->paragraph,
            'price' => $this->faker->numberBetween(1000, 5000),
            'publish_date' => $this->faker->year
        ];
    }
}
