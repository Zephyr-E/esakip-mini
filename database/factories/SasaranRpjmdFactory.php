<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SasaranRpjmds>
 */
class SasaranRpjmdFactory extends Factory
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
            'name' => 'sasaran rpjmd 1',
            'tujuan_rpjmd_id' => '1'
        ];
    }
}
