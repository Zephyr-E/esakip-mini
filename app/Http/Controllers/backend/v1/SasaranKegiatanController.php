<?php

namespace App\Http\Controllers\backend\v1;

use App\Http\Controllers\Controller;
use App\Models\SasaranKegiatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SasaranKegiatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
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
            'program_id' => 'required',
            'nomor' => 'required',
            'name' => 'required',
        ]);

        $data = $request->all();
        SasaranKegiatan::create($data);

        return redirect()->back()->with('success', 'Sasaran Kegiatan Berhasil di Tambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SasaranKegiatan  $sasaranKegiatan
     * @return \Illuminate\Http\Response
     */
    public function show(SasaranKegiatan $sasaranKegiatan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SasaranKegiatan  $sasaranKegiatan
     * @return \Illuminate\Http\Response
     */
    public function edit(SasaranKegiatan $sasaranKegiatan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SasaranKegiatan  $sasaranKegiatan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SasaranKegiatan $sasaran_kegiatan)
    {
        if (Auth::user()->rule !== 'Admin') {
            return redirect()->route('renja.index');
        }

        $request->validate([
            'nomor' => 'required',
            'name' => 'required',
        ]);

        $data = $request->all();
        $sasaran_kegiatan->update($data);

        return redirect()->back()->with('success', 'Sasaran Kegiatan Berhasil di Perbaharui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SasaranKegiatan  $sasaran_kegiatan
     * @return \Illuminate\Http\Response
     */
    public function destroy(SasaranKegiatan $sasaran_kegiatan)
    {
        if (Auth::user()->rule !== 'Admin') {
            return redirect()->route('renja.index');
        }

        $sasaran_kegiatan->delete();

        return redirect()->back()->with('success', 'Sasaran Kegiatan Berhasil di Hapus');
    }
}
