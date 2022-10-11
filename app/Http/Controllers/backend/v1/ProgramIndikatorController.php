<?php

namespace App\Http\Controllers\backend\v1;

use App\Http\Controllers\Controller;
use App\Models\ProgramIndikator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProgramIndikatorController extends Controller
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
            'program_id' => 'required',
            'indikator' => 'required',
            // 'tahun' => 'required',
            // 'satuan' => 'required',
            // 'target' => 'required',
            // 'realisasi' => 'required',
            // 'tw_i' => 'required',
            // 'tw_ii' => 'required',
            // 'tw_iii' => 'required',
            // 'tw_iv' => 'required',
            // 'capaian' => 'required',
        ]);

        $data = $request->all();
        ProgramIndikator::create($data);

        return redirect()->route('renja.index')->with(['success', 'Program Indikator Berhasil di Tambahkan']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProgramIndikator  $programIndikator
     * @return \Illuminate\Http\Response
     */
    public function show(ProgramIndikator $programIndikator)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProgramIndikator  $programIndikator
     * @return \Illuminate\Http\Response
     */
    public function edit(ProgramIndikator $programIndikator)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ProgramIndikator  $programIndikator
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProgramIndikator $program_indikator)
    {
        if (Auth::user()->rule !== 'Admin') {
            return redirect()->route('renja.index');
        }

        $request->validate([
            'indikator' => 'required',
            // 'tahun' => 'required',
            // 'satuan' => 'required',
            // 'target' => 'required',
            // 'realisasi' => 'required',
            // 'tw_i' => 'required',
            // 'tw_ii' => 'required',
            // 'tw_iii' => 'required',
            // 'tw_iv' => 'required',
            // 'capaian' => 'required',
        ]);

        $data = $request->all();
        $program_indikator->update($data);

        return redirect()->route('renja.index')->with('toast_success', 'Program Indikator Berhasil di Perbaharui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProgramIndikator  $programIndikator
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProgramIndikator $program_indikator)
    {
        if (Auth::user()->rule !== 'Admin') {
            return redirect()->route('renja.index');
        }

        $program_indikator->delete();

        return redirect()->back()->with('success', 'Program Indikator Berhasil di Hapus');
    }
}
