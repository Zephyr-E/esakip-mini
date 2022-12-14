<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TujuanRpjmd extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function misi()
    {
        return $this->belongsTo(Misi::class);
    }

    public function sasaran_rpjmd()
    {
        return $this->hasMany(SasaranRpjmd::class);
    }
}
