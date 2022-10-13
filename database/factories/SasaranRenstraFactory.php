<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SasaranRestra>
 */
class SasaranRenstraFactory extends Factory
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
            'name' => 'sasaran skpd 1',
            'tujuan_renstra_id' => '1',
            'tahun' => '2022',
            'status' => 'murni'
        ];
    }
}
