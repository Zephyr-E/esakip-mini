<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function sasaran_renstra()
    {
        return $this->belongsTo(SasaranRenstra::class);
    }

    public function kegiatan()
    {
        return $this->hasMany(Kegiatan::class);
    }

    public function program_indikator()
    {
        return $this->hasMany(ProgramIndikator::class);
    }
}
