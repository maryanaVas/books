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
            'title' => implode(' ', $this->faker->words(2)),
            'author' => $this->faker->name,
            'publication_year' => $this->faker->year,
            'publisher' => $this->faker->company,
            'isbn' => $this->faker->isbn13(),
            'image_name' => null // TODO
        ];
    }
}
