<?php

namespace Database\Factories;

use App\Models\BookAuthor;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookAuthorFactory extends Factory
{
    protected $model = BookAuthor::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'book_id' => function () {
                return \App\Models\Book::factory()->create()->id;
            },
            'author_id' => function () {
                return \App\Models\Author::factory()->create()->id;
            },
        ];
    }
}
