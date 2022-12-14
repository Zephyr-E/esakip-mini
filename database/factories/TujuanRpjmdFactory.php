<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TujuanRpjmd>
 */
class TujuanRpjmdFactory extends Factory
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
            'name' => 'tujuan rpjmd 1',
            'misi_id' => '1'
        ];
    }
}
