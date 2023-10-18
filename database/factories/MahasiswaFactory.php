<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Mahasiswa>
 */
class MahasiswaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'npm' => $this->faker->unique()->numberBetween(1000,9999),
            'nama' => $this->faker->name,
            'email' => $this->faker->safeEmail,
            'img' => 'https://upload.wikimedia.org/wikipedia/commons/9/9f/Megawati_Sukarnoputri_official_portrait.jpg',
            'sosmed' => json_encode(["ig" => "kosong", "linkedin" => "kosong"] ),
            'user_id' => $this->faker->unique()->numberBetween(2,10)
        ];
    }
}
