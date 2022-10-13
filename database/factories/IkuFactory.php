<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Iku>
 */
class IkuFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'indikator' => 'iku 1',
            'sasaran_renstra_id' => '1',
            'otorisasi' => 'otorisasi 1'
        ];
    }
}
