<?php

namespace App\Http\Controllers\backend\v1;

use App\Http\Controllers\Controller;
use App\Models\Iku;
use App\Models\Kegiatan;
use App\Models\KegiatanIndikator;
use App\Models\Program;
use App\Models\ProgramIndikator;
use App\Models\SasaranRenstra;
use App\Models\SubKegiatan;
use App\Models\SubKegiatanIndikator;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {


        // indikator
        $data['sasaran_renstras'] = SasaranRenstra::whereHas('tujuan_renstra.sasaran_rpjmd.tujuan_rpjmd.misi.visi', function ($query) {
            return $query->where('aktif', 1);
        })->get();

        $data['program_indikators'] = ProgramIndikator::whereHas('program.sasaran_program.sasaran_renstra.tujuan_renstra.sasaran_rpjmd.tujuan_rpjmd.misi.visi', function ($query) {
            return $query->where('aktif', 1);
        })->count();

        $data['kegiatan_indikators'] = KegiatanIndikator::whereHas('kegiatan.sasaran_kegiatan.program.sasaran_program.sasaran_renstra.tujuan_renstra.sasaran_rpjmd.tujuan_rpjmd.misi.visi', function ($query) {
            return $query->where('aktif', 1);
        })->count();

        $data['sub_kegiatan_indikators'] = SubKegiatanIndikator::whereHas('sub_kegiatan.kegiatan.sasaran_kegiatan.program.sasaran_program.sasaran_renstra.tujuan_renstra.sasaran_rpjmd.tujuan_rpjmd.misi.visi', function ($query) {
            return $query->where('aktif', 1);
        })->count();




        // publikasi
        $data['programs'] = Program::whereHas('sasaran_program.sasaran_renstra.tujuan_renstra.sasaran_rpjmd.tujuan_rpjmd.misi.visi', function ($query) {
            return $query->where('aktif', 1)->orderBy('updated_at', 'DESC');
        })->get();

        $data['kegiatans'] = Kegiatan::whereHas('sasaran_kegiatan.program.sasaran_program.sasaran_renstra.tujuan_renstra.sasaran_rpjmd.tujuan_rpjmd.misi.visi', function ($query) {
            return $query->where('aktif', 1)->orderBy('updated_at', 'DESC');
        })->get();

        $data['sub_kegiatans'] = SubKegiatan::whereHas('kegiatan.sasaran_kegiatan.program.sasaran_program.sasaran_renstra.tujuan_renstra.sasaran_rpjmd.tujuan_rpjmd.misi.visi', function ($query) {
            return $query->where('aktif', 1)->orderBy('updated_at', 'DESC');
        })->get();

        $data['ikus'] = Iku::whereHas('sasaran_renstra.tujuan_renstra.sasaran_rpjmd.tujuan_rpjmd.misi.visi', function ($query) {
            return $query->where('aktif', 1)->orderBy('updated_at', 'DESC');
        })->get();

        return view('backend.v1.pages.dashboard.index', $data);
    }

    public function profile()
    {
        $id = Auth::user()->id;
        $data['user'] = User::find($id);
        return view('profile.show', $data);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
