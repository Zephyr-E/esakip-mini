<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubKegiatan extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function kegiatan()
    {
        return $this->belongsTo(Kegiatan::class);
    }

    public function sub_kegiatan_indikator()
    {
        return $this->hasMany(SubKegiatanIndikator::class);
    }
}
