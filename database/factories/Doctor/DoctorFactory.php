<?php

namespace Database\Factories\Doctor;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Doctor\Doctor>
 */
class DoctorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'doctor_name' => fake()->name(),
            'doctor_specialist' => fake()->word(),
            'doctor_phone' => fake()->phoneNumber(),
            'doctor_email' => fake()->unique()->safeEmail(),
            'photo' => fake()->imageUrl(),
            'address' => fake()->address(),
            'sip' => fake()->word(),
            'nik' => fake()->randomNumber(),
        ];
    }
}
