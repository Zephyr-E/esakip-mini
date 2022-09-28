<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TujuanRenstra extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function sasaran_rpjmd()
    {
        return $this->belongsTo(SasaranRpjmd::class);
    }

    public function sasaran_renstra()
    {
        return $this->hasMany(SasaranRenstra::class);
    }
}
