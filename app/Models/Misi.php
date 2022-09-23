<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Misi extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function visi()
    {
        return $this->belongsTo(Visi::class);
    }

    public function tujuan_rpjmd()
    {
        return $this->hasMany(TujuanRpjmd::class);
    }
}
