<?php

namespace App\Http\Controllers\backend\v1;

use App\Http\Controllers\Controller;
use App\Models\Iku;
use App\Models\SasaranRenstra;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IkuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['sasaran_renstras'] = SasaranRenstra::whereHas('tujuan_renstra.sasaran_rpjmd.tujuan_rpjmd.misi.visi', function ($query) {
            return $query->where('aktif', 1);
        })->get();


        return view('backend.v1.pages.iku.index', $data);
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
            return redirect()->route('iku.index');
        }

        $request->validate([
            'sasaran_renstra_id' => 'required',
            'indikator' => 'required',
            'kendala' => 'required',
            'solusi' => 'required',
            'tindak_lanjut' => 'required',
            'otorisasi' => 'required',
            'tahun' => 'required',
        ]);

        $data = $request->all();
        Iku::create($data);

        return redirect()->route('iku.index')->with(['success', 'Indikator Tujuan Utama Berhasil di Tambahkan']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Iku  $iku
     * @return \Illuminate\Http\Response
     */
    public function show(Iku $iku)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Iku  $iku
     * @return \Illuminate\Http\Response
     */
    public function edit(Iku $iku)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Iku  $iku
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Iku $iku)
    {
        if (Auth::user()->rule !== 'Admin') {
            return redirect()->route('iku.index');
        }
        $request->validate([
            'indikator' => 'required',
            'kendala' => 'required',
            'solusi' => 'required',
            'tindak_lanjut' => 'required',
            'otorisasi' => 'required',
            'tahun' => 'required',
        ]);

        $data = $request->all();
        $iku->update($data);

        return redirect()->route('iku.index')->with('toast_success', 'Indikator Tujuan Utama Berhasil di Perbaharui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Iku  $iku
     * @return \Illuminate\Http\Response
     */
    public function destroy(Iku $iku)
    {
        if (Auth::user()->rule !== 'Admin') {
            return redirect()->route('iku.index');
        }

        $iku->delete();

        return redirect()->back()->with('success', 'Indikator Tujuan Utama Berhasil di Hapus');
    }
}
