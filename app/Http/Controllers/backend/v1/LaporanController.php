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
        $data['sasaran_renstras'] = SasaranRenstra::whereHas('tujuan_renstra.sasaran_rpjmd.tujuan_rpjmd.misi.visi', function ($query) {
            return $query->where('aktif', 1);
        })->where('tahun', $request->tahun)->where('status', $request->status)->get();

        $data['tahun'] = $request->tahun;
        $data['status'] = $request->status;

        // dd($data);


        return view('backend.v1.pages.laporan.print', $data);
    }
}
