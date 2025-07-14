<?php

namespace Database\Factories;

use App\Models\manager;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\team>
 */
class teamFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->company . ' Team',
            'manager_id' => manager::inRandomOrder()->first()->id ?? manager::factory(),
        ];
    }
}
