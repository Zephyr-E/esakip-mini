<?php

namespace App\Http\Controllers\backend\v1;

use App\Http\Controllers\Controller;
use App\Models\Kegiatan;
use App\Models\SubKegiatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SubKegiatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Kegiatan $kegiatan)
    {
        // dd($kegiatan);
        // $data['sub_kegiatan'] = $kegiatan->sub_kegiatan();
        // return view('backend.v1.pages.renja.sub-kegiatan.index', $data);
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
            'name' => 'required',
            'kegiatan_id' => 'required',
            'kendala' => 'required',
            'solusi' => 'required',
            'tindak_lanjut' => 'required',
            'otorisasi' => 'required',
            'pagu' => 'required',
        ]);

        $data = $request->all();
        SubKegiatan::create($data);

        return redirect()->back()->with('success', 'Sub Kegiatan Berhasil di Tambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SubKegiatan  $subKegiatan
     * @return \Illuminate\Http\Response
     */
    public function show(SubKegiatan $subKegiatan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SubKegiatan  $subKegiatan
     * @return \Illuminate\Http\Response
     */
    public function edit(SubKegiatan $subKegiatan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SubKegiatan  $subKegiatan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SubKegiatan $sub_kegiatan)
    {
        if (Auth::user()->rule !== 'Admin') {
            return redirect()->route('renja.index');
        }
        $request->validate([
            'name' => 'required',
            'kendala' => 'required',
            'solusi' => 'required',
            'tindak_lanjut' => 'required',
            'otorisasi' => 'required',
            'pagu' => 'required',
        ]);

        $data = $request->all();
        $sub_kegiatan->update($data);

        return redirect()->back()->with('success', 'Sub Kegiatan Berhasil di Perbaharui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SubKegiatan  $subKegiatan
     * @return \Illuminate\Http\Response
     */
    public function destroy(SubKegiatan $sub_kegiatan)
    {
        if (Auth::user()->rule !== 'Admin') {
            return redirect()->route('renja.index');
        }

        $sub_kegiatan->delete();

        return redirect()->back()->with('success', 'Sub Kegiatan Berhasil di Hapus');
    }
}
