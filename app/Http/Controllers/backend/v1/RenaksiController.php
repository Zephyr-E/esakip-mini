<?php

namespace App\Http\Controllers\backend\v1;

use App\Http\Controllers\Controller;
use App\Models\Iku;
use App\Models\SasaranRenstra;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RenaksiController extends Controller
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

        return view('backend.v1.pages.renaksi.index', $data);
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
        //
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
    public function update(Request $request, Iku $renaksi)
    {
        if (Auth::user()->rule !== 'Admin') {
            return redirect()->route('renaksi.index');
        }

        $request->validate([
            'target' => 'required',
            'realisasi' => 'required',
            'tw_i' => 'required',
            'tw_ii' => 'required',
            'tw_iii' => 'required',
            'tw_iv' => 'required',
            'capaian' => 'required',
        ]);

        $data = $request->all();
        $renaksi->update($data);

        return redirect()->route('renaksi.index')->with('toast_success', 'Renaksi Berhasil di Perbaharui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Iku  $iku
     * @return \Illuminate\Http\Response
     */
    public function destroy(Iku $iku)
    {
        //
    }
}
