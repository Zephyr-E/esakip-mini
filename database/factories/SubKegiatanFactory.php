<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SubKegiatan>
 */
class SubKegiatanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => 'sub kegiatan 1',
            'kegiatan_id' => '1',
            'otorisasi' => 'otorisasi 1',
            'pagu' => '1000000'
        ];
    }
}
