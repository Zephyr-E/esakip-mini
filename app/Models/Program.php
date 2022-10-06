<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function sasaran_program()
    {
        return $this->belongsTo(SasaranProgram::class);
    }

    public function sasaran_kegiatan()
    {
        return $this->hasMany(SasaranKegiatan::class);
    }

    public function program_indikator()
    {
        return $this->hasMany(ProgramIndikator::class);
    }
}
