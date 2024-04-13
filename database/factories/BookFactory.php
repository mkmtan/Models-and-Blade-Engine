<?php

namespace Database\Factories;

use App\Models\Book;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    /**
     * 
     *
     * @return array
     */
    public function definition()
    {
        return [
            'isbn' => $this->faker->isbn13(),
            'title' => $this->faker->sentence(),
            'author' => $this->faker->name(),
            'description' => $this->faker->paragraph(),
            'date_published' => $this->faker->date(),
        ];
    }
}
