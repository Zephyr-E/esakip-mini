<?php

namespace App\Http\Controllers\backend\v1;

use App\Http\Controllers\Controller;
use App\Models\Iku;
use App\Models\KegiatanIndikator;
use App\Models\ProgramIndikator;
use App\Models\SasaranRenstra;
use App\Models\SubKegiatanIndikator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RenaksiController extends Controller
{
    public function index()
    {
        $data['sasaran_renstras'] = SasaranRenstra::whereHas('tujuan_renstra.sasaran_rpjmd.tujuan_rpjmd.misi.visi', function ($query) {
            return $query->where('aktif', 1);
        })->get();

        return view('backend.v1.pages.renaksi.index', $data);
    }

    public function iku_update(Request $request, Iku $iku)
    {
        if (Auth::user()->rule !== 'Admin') {
            return redirect()->route('renaksi.index');
        }

        $data = $request->all();
        $iku->update($data);

        return redirect()->route('renaksi.index')->with('toast_success', 'IKU Berhasil di Perbaharui');
    }

    public function program_indikator_update(Request $request, ProgramIndikator $program_indikator)
    {
        if (Auth::user()->rule !== 'Admin') {
            return redirect()->route('renaksi.index');
        }

        $data = $request->all();
        $program_indikator->update($data);

        return redirect()->route('renaksi.index')->with('toast_success', 'Program Indikator Berhasil di Perbaharui');
    }

    public function kegiatan_indikator_update(Request $request, KegiatanIndikator $kegiatan_indikator)
    {
        if (Auth::user()->rule !== 'Admin') {
            return redirect()->route('renaksi.index');
        }

        $data = $request->all();
        $kegiatan_indikator->update($data);

        return redirect()->route('renaksi.index')->with('toast_success', 'Kegiatan Indikator Berhasil di Perbaharui');
    }

    public function sub_kegiatan_indikator_update(Request $request, SubKegiatanIndikator $sub_kegiatan_indikator)
    {
        if (Auth::user()->rule !== 'Admin') {
            return redirect()->route('renaksi.index');
        }

        $data = $request->all();
        $sub_kegiatan_indikator->update($data);

        return redirect()->route('renaksi.index')->with('toast_success', 'Sub Kegiatan Indikator Berhasil di Perbaharui');
    }
}
