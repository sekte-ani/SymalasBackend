<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Dosen>
 */
class DosenFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
    
        return [
            'nip' => $this->faker->unique()->numberBetween(111, 118),
            'nama' => $this->faker->name,
            'email' => $this->faker->safeEmail,
            'user_id' => $this->faker->unique()->numberBetween(11, 18)
        ];
    }
}
