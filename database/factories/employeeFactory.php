<?php

namespace Database\Factories;

use App\Models\manager;
use App\Models\team;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\employee>
 */
class employeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'phone' => $this->faker->phoneNumber,
            'position' => $this->faker->jobTitle,
            'salary'=> $this->faker->numberBetween(8000,100000),
            'team_id' => team::inRandomOrder()->first()->id ?? Team::factory(),
            'manager_id' => manager::inRandomOrder()->first()->id ?? Manager::factory(),
        ];
    }
}
