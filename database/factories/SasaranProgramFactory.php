<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SasaranProgram>
 */
class SasaranProgramFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nomor' => '1',
            'name' => 'sasaran renstra 1',
            'sasaran_renstra_id' => '1'
        ];
    }
}
