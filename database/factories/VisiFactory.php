<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Visi>
 */
class VisiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => '"' . $this->faker->sentence(4, true) . '"',
            'tahun_awal' => '2018',
            'tahun_akhir' => '2023'
        ];
    }
}
