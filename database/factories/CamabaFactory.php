<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\camaba>
 */
class CamabaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            // 'nama' => $this->faker->randomElement(['Siraj Hammam Ahmad', 'Hanafie Rizal', 'Muhammad alwi']),
            // 'nama' => $this->faker->name,
            // 'prodi1' => $this->faker->randomElement(['ti', 'tip', 'agro', 'hi', 'ilkom', 'saa', 'afi', 'iqt', 'kkk', 'farmasi', 'gizi', 'pba', 'pai', 'tbi', 'hes', 'pm', 'ei', 'mb']),
            // 'prodi2' => $this->faker->randomElement(['ti', 'tip', 'agro', 'hi', 'ilkom', 'saa', 'afi', 'iqt', 'kkk', 'farmasi', 'gizi', 'pba', 'pai', 'tbi', 'hes', 'pm', 'ei', 'mb']),
            // 'prodi3' => $this->faker->randomElement(['ti', 'tip', 'agro', 'hi', 'ilkom', 'saa', 'afi', 'iqt', 'kkk', 'farmasi', 'gizi', 'pba', 'pai', 'tbi', 'hes', 'pm', 'ei', 'mb']),
            // 'periode' => $this->faker->randomElement(['20191', '20192', '20201', '20202']),
        ];
    }
}
