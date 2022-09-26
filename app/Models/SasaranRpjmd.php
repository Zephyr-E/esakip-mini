<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SasaranRpjmd extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function tujuan_rpjmd()
    {
        return $this->belongsTo(TujuanRpjmd::class);
    }
}
