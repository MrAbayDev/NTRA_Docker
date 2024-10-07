<?php

namespace Database\Factories;

use App\Models\Branch;
use App\Models\Status;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ad>
 */
class AdFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->name(),
            'description' => $this->faker->name(),
            'price' => $this->faker->numberBetween(100, 10000),
            'rooms' => $this->faker->numberBetween(1, 5),
            'address' => $this->faker->address(),
            'gender' => $this->faker->randomElement(['male', 'female']),
            'branch_id' => Branch::factory(),
            'status_id' => Status::factory(),
            'user_id' => User::factory()
        ];
    }
}
