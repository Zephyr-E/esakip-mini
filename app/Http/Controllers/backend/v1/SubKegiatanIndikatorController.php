<?php

namespace App\Http\Controllers\backend\v1;

use App\Http\Controllers\Controller;
use App\Models\SubKegiatanIndikator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SubKegiatanIndikatorController extends Controller
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

        // dd($request);

        $request->validate([
            'sub_kegiatan_id' => 'required',
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
        SubKegiatanIndikator::create($data);

        return redirect()->back()->with('success', 'Sub Kegiatan Indikator Berhasil di Tambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SubKegiatanIndikator  $subKegiatanIndikator
     * @return \Illuminate\Http\Response
     */
    public function show(SubKegiatanIndikator $subKegiatanIndikator)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SubKegiatanIndikator  $subKegiatanIndikator
     * @return \Illuminate\Http\Response
     */
    public function edit(SubKegiatanIndikator $subKegiatanIndikator)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SubKegiatanIndikator  $subKegiatanIndikator
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SubKegiatanIndikator $sub_kegiatan_indikator)
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
        $sub_kegiatan_indikator->update($data);

        return redirect()->back()->with('success', 'Sub Kegiatan Indikator Berhasil di Perbaharui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SubKegiatanIndikator  $subKegiatanIndikator
     * @return \Illuminate\Http\Response
     */
    public function destroy(SubKegiatanIndikator $sub_kegiatan_indikator)
    {
        if (Auth::user()->rule !== 'Admin') {
            return redirect()->route('renja.index');
        }

        $sub_kegiatan_indikator->delete();

        return redirect()->back()->with('success', 'Sub Kegiatan Indikator Berhasil di Hapus');
    }
}
