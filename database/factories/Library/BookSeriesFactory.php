<?php

namespace Database\Factories\Library;

use App\Models\Library\Book;
use App\Models\Library\Series;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Library\BookSeries>
 */
class BookSeriesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->title(),
            'genre' => null,
            'book_id' => Book::factory()->create()->id,
            'series_id' => Series::factory()->create()->id
        ];
    }
}
