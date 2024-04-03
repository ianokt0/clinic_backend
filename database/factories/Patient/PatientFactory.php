<?php

namespace Database\Factories\Patient;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Patient\Patient>
 */
class PatientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'nik' => $this->faker->unique()->numberBetween(1, 100),
            'kk' => $this->faker->word(),
            'phone' => fake()->phoneNumber(),
            'email' => fake()->safeEmail(),
            'gender' => fake()->randomElement(['Pria', 'Wanita']),
            'birth_place' => fake()->word(),
            'birth_date' => fake()->date(),
            'is_deceased' => false,
            'address_line' => fake()->streetAddress(),
            'city' => fake()->city(),
            'city_code' => fake()->numberBetween(1, 100),
            'province' => fake()->word(),
            'province_code' => fake()->numberBetween(1, 100),
            'district' => fake()->word(),
            'district_code' => fake()->numberBetween(1, 100),
            'village' => fake()->word(),
            'village_code' => fake()->numberBetween(1, 100),
            'rt' => fake()->numberBetween(1, 100),
            'rw' => fake()->numberBetween(1, 100),
            'postal_code' => fake()->numberBetween(1, 100),
            'marital_status' => fake()->word(),
            'relationship_name' => fake()->word(),
            'relationship_phone' => fake()->phoneNumber()
        ];
    }
}
