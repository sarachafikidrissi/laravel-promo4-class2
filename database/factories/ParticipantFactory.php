<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Participant>
 */
class ParticipantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $class = ['cooding', 'media'];
        return [
            "name" => fake()->name(),
            "age" => fake()->numberBetween(18, 30),
            "class" => fake()->randomElement($class)
        ];
    }
}
