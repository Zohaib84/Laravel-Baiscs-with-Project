<?php

namespace Database\Factories;

use App\Models\Library;
use Illuminate\Database\Eloquent\Factories\Factory;

class LibraryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Library::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'book' => $this->faker->sentence(3), // Example: Generates a sentence with 3 words for book name
            // Example: Random due date between 1 week and 2 months from now
            'due_date' => $this->faker->dateTimeBetween('+1 week', '+2 months')->format('Y-m-d'), 
            
            'status' => $this->faker->randomElement([0, 1]) // Example: Randomly selects 0 or 1 for status
        ];
    }
}
