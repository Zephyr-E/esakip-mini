<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubKegiatanIndikator extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function sub_kegiatan()
    {
        return $this->belongsTo(SubKegiatan::class);
    }
}
