<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SasaranProgram extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function sasaran_renstra()
    {
        return $this->belongsTo(SasaranRenstra::class);
    }

    public function program()
    {
        return $this->hasMany(Program::class);
    }
}
