<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kegiatan extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function program()
    {
        return $this->belongsTo(Program::class);
    }

    public function kegiatan_indikator()
    {
        return $this->hasMany(KegiatanIndikator::class);
    }

    public function sub_kegiatan()
    {
        return $this->hasMany(SubKegiatan::class);
    }
}
