<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Iku extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function sasaran_renstra()
    {
        return $this->belongsTo(SasaranRenstra::class);
    }
}
