<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SasaranRenstra extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function tujuan_renstra()
    {
        return $this->belongsTo(TujuanRenstra::class);
    }

    public function program()
    {
        return $this->hasMany(Program::class);
    }

    public function iku()
    {
        return $this->hasMany(Iku::class);
    }
}
