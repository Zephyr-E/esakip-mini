<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Program>
 */
class ProgramFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => 'program 1',
            'sasaran_program_id' => '1',
            'otorisasi' => 'otorisasi 1',
            'apbd' => 'murni',
            'tahun' => '2022'
        ];
    }
}
