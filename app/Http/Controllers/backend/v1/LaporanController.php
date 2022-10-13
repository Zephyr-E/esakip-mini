<?php

namespace App\Http\Controllers\backend\v1;

use App\Http\Controllers\Controller;
use App\Models\Iku;
use App\Models\SasaranRenstra;
use App\Models\SasaranRpjmd;
use App\Models\TujuanRenstra;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function index()
    {
        return view('backend.v1.pages.laporan.index');
    }

    public function print(Request $request)
    {
        // dd($request);
        $data['sasaran_renstras'] = SasaranRenstra::whereHas('tujuan_renstra.sasaran_rpjmd.tujuan_rpjmd.misi.visi', function ($query) {
            return $query->where('aktif', 1);
        })->get();


        return view('backend.v1.pages.laporan.print', $data);
    }
}
