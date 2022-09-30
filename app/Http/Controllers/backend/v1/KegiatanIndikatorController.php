<?php

namespace App\Http\Controllers\backend\v1;

use App\Http\Controllers\Controller;
use App\Models\KegiatanIndikator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KegiatanIndikatorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (Auth::user()->rule !== 'Admin') {
            return redirect()->route('renja.index');
        }

        $request->validate([
            'kegiatan_id' => 'required',
            'indikator' => 'required',
            'satuan' => 'required',
            'target' => 'required',
            'realisasi' => 'required',
            'tahun' => 'required',
            'tw_i' => 'required',
            'tw_ii' => 'required',
            'tw_iii' => 'required',
            'tw_iv' => 'required',
            'capaian' => 'required',
        ]);

        $data = $request->all();
        KegiatanIndikator::create($data);

        return redirect()->back()->with('success', 'Kegiatan Indikator Berhasil di Hapus');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\KegiatanIndikator  $kegiatanIndikator
     * @return \Illuminate\Http\Response
     */
    public function show(KegiatanIndikator $kegiatanIndikator)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\KegiatanIndikator  $kegiatanIndikator
     * @return \Illuminate\Http\Response
     */
    public function edit(KegiatanIndikator $kegiatanIndikator)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\KegiatanIndikator  $kegiatanIndikator
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, KegiatanIndikator $kegiatan_indikator)
    {
        if (Auth::user()->rule !== 'Admin') {
            return redirect()->route('renja.index');
        }

        $request->validate([
            'indikator' => 'required',
            'satuan' => 'required',
            'target' => 'required',
            'realisasi' => 'required',
            'tahun' => 'required',
            'tw_i' => 'required',
            'tw_ii' => 'required',
            'tw_iii' => 'required',
            'tw_iv' => 'required',
            'capaian' => 'required',
        ]);

        $data = $request->all();
        $kegiatan_indikator->update($data);

        return redirect()->back()->with('success', 'Kegiatan Indikator Berhasil di Perbaharui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\KegiatanIndikator  $kegiatanIndikator
     * @return \Illuminate\Http\Response
     */
    public function destroy(KegiatanIndikator $kegiatan_indikator)
    {
        if (Auth::user()->rule !== 'Admin') {
            return redirect()->route('renja.index');
        }

        $kegiatan_indikator->delete();

        return redirect()->back()->with('success', 'Program Berhasil di Hapus');
    }
}
