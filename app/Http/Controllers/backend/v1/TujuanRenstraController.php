<?php

namespace App\Http\Controllers\backend\v1;

use App\Http\Controllers\Controller;
use App\Models\SasaranRpjmd;
use App\Models\TujuanRenstra;
use App\Models\TujuanRpjmd;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class TujuanRenstraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['tujuan_rpjmds'] = TujuanRpjmd::whereHas('misi.visi', function ($query) {
            return $query->where('aktif', 1);
        })->get();


        return view('backend.v1.pages.renstra.index', $data);
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
            return redirect()->route('renstra.index');
        }

        $request->validate([
            'nomor' => 'required',
            'name' => 'required',
            'sasaran_rpjmd_id' => 'required',
        ]);

        $data = $request->all();
        TujuanRenstra::create($data);

        return redirect()->route('renstra.index')->with(['success', 'Tujuan SKPD Berhasil di Tambahkan']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TujuanRenstra  $tujuanRenstra
     * @return \Illuminate\Http\Response
     */
    public function show(TujuanRenstra $tujuanRenstra)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TujuanRenstra  $tujuanRenstra
     * @return \Illuminate\Http\Response
     */
    public function edit(TujuanRenstra $tujuanRenstra)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TujuanRenstra  $tujuanRenstra
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TujuanRenstra $renstra)
    {
        if (Auth::user()->rule !== 'Admin') {
            return redirect()->route('renstra.index');
        }
        $request->validate([
            'nomor' => 'required',
            'name' => 'required',
        ]);

        $data = $request->all();
        $renstra->update($data);

        return redirect()->route('renstra.index')->with('toast_success', 'Tujuan SKPD Berhasil di Perbaharui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TujuanRenstra  $tujuanRenstra
     * @return \Illuminate\Http\Response
     */
    public function destroy(TujuanRenstra $renstra)
    {
        if (Auth::user()->rule !== 'Admin') {
            return redirect()->route('renstra.index');
        }

        $renstra->delete();

        return redirect()->back()->with('success', 'Tujuan SKPD Berhasil di Hapus');
    }
}
