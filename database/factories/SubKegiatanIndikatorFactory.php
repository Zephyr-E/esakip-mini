<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SubKegiatanIndikator>
 */
class SubKegiatanIndikatorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'indikator' => 'sub kegiatan indikator 1',
            'sub_kegiatan_id' => '1'
        ];
    }
}
