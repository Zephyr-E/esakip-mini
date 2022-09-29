<?php

namespace App\Http\Controllers\backend\v1;

use App\Http\Controllers\Controller;
use App\Models\SasaranRenstra;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SasaranRenstraController extends Controller
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
            return redirect()->route('renstra.index');
        }

        $request->validate([
            'tujuan_renstra_id' => 'required',
            'nomor' => 'required',
            'name' => 'required',
            'tahun' => 'required',
            'status' => 'required',
        ]);

        $data = $request->all();
        SasaranRenstra::create($data);

        return redirect()->route('renstra.index')->with(['success', 'Sasaran SKPD Berhasil di Tambahkan']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SasaranRenstra  $sasaranRenstra
     * @return \Illuminate\Http\Response
     */
    public function show(SasaranRenstra $sasaranRenstra)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SasaranRenstra  $sasaranRenstra
     * @return \Illuminate\Http\Response
     */
    public function edit(SasaranRenstra $sasaranRenstra)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SasaranRenstra  $sasaranRenstra
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SasaranRenstra $renstra_sasaran)
    {
        if (Auth::user()->rule !== 'Admin') {
            return redirect()->route('renstra.index');
        }
        $request->validate([
            'nomor' => 'required',
            'name' => 'required',
            'tahun' => 'required',
            'status' => 'required',
        ]);

        $data = $request->all();
        $renstra_sasaran->update($data);

        return redirect()->route('renstra.index')->with('toast_success', 'Tujuan SKPD Berhasil di Perbaharui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SasaranRenstra  $sasaranRenstra
     * @return \Illuminate\Http\Response
     */
    public function destroy(SasaranRenstra $renstra_sasaran)
    {
        if (Auth::user()->rule !== 'Admin') {
            return redirect()->route('renstra.index');
        }

        $renstra_sasaran->delete();

        return redirect()->back()->with('success', 'Sasaran SKPD Berhasil di Hapus');
    }
}
