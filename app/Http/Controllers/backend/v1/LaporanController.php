<?php

namespace App\Http\Controllers\backend\v1;

use App\Http\Controllers\Controller;
use App\Models\Iku;
use App\Models\TujuanRenstra;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function index()
    {
        //iku, renaksi
        $data['ikus'] = Iku::whereHas('sasaran_renstra.tujuan_renstra.sasaran_rpjmd.tujuan_rpjmd.misi.visi', function ($query) {
            return $query->where('aktif', 1);
        })->get();

        // renja, renstra
        $data['tujuan_renstras'] = TujuanRenstra::whereHas('sasaran_rpjmd.tujuan_rpjmd.misi.visi', function ($query) {
            return $query->where('aktif', 1);
        })->get();


        return view('backend.v1.pages.laporan.index', $data);
    }

    public function renstra($renstra)
    {
        $data['laporan'] = $renstra;
        dd($data);
        return $data;
    }

    public function iku($iku)
    {
        $data['laporan'] = $iku;
        return $data;
    }

    public function renaksi($renaksi)
    {
        $data['laporan'] = $renaksi;
        return $data;
    }
}
