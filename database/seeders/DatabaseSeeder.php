<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Iku;
use App\Models\Kegiatan;
use App\Models\KegiatanIndikator;
use App\Models\Misi;
use App\Models\Program;
use App\Models\ProgramIndikator;
use App\Models\SasaranKegiatan;
use App\Models\SasaranProgram;
use App\Models\SasaranRenstra;
use App\Models\SasaranRpjmd;
use App\Models\SubKegiatan;
use App\Models\SubKegiatanIndikator;
use App\Models\TujuanRenstra;
use App\Models\TujuanRpjmd;
use App\Models\User;
use App\Models\Visi;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(1)->create();
        Visi::factory(1)->create();
        Misi::factory(5)->create();
        TujuanRpjmd::factory(1)->create();
        SasaranRpjmd::factory(1)->create();
        TujuanRenstra::factory(1)->create();
        SasaranRenstra::factory(1)->create();
        SasaranProgram::factory(1)->create();
        Program::factory(1)->create();
        ProgramIndikator::factory(1)->create();
        SasaranKegiatan::factory(1)->create();
        Kegiatan::factory(1)->create();
        KegiatanIndikator::factory(1)->create();
        SubKegiatan::factory(1)->create();
        SubKegiatanIndikator::factory(1)->create();
        Iku::factory(1)->create();
    }
}
