<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Misi>
 */
class MisiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nomor' => $this->faker->numberBetween(1, 10),
            'name' => $this->faker->sentence(10, true),
            'visi_id' => '1'
        ];
    }
}
