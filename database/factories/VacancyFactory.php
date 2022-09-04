<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Vacancy>
 */
class VacancyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => fake()->word(),
            'company' => fake()->company(),
            'salary' => fake()->buildingNumber(),
            'experience' => '1-3 года',
            'description' => fake()->text(),
            'skills' => 'LARAVEL, PHP, PGSQL'
        ];
    }
}
