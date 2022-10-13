<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TujuanRestra>
 */
class TujuanRenstraFactory extends Factory
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
            'name' => 'tujuan skpd 1',
            'sasaran_rpjmd_id' => '1'
        ];
    }
}
