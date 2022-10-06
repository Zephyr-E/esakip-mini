<?php

namespace App\Http\Controllers\backend\v1;

use App\Http\Controllers\Controller;
use App\Models\SasaranProgram;
use App\Models\SasaranRenstra;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SasaranProgramController extends Controller
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

        return view('backend.v1.pages.renja.sasaran-program.index', $data);
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
            'sasaran_renstra_id' => 'required',
            'nomor' => 'required',
            'name' => 'required',
        ]);

        $data = $request->all();
        SasaranProgram::create($data);

        return redirect()->route('renja.index')->with(['success', 'Sasaran Program Berhasil di Tambahkan']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SasaranProgram  $sasaranProgram
     * @return \Illuminate\Http\Response
     */
    public function show(SasaranProgram $renja)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SasaranProgram  $sasaranProgram
     * @return \Illuminate\Http\Response
     */
    public function edit(SasaranProgram $sasaranProgram)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SasaranProgram  $sasaranProgram
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SasaranProgram $renja)
    {
        if (Auth::user()->rule !== 'Admin') {
            return redirect()->route('renja.index');
        }

        $request->validate([
            'nomor' => 'required',
            'name' => 'required',
        ]);

        $data = $request->all();
        $renja->update($data);

        return redirect()->route('renja.index')->with(['success', 'Sasaran Program Berhasil di Perbaharui']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SasaranProgram  $sasaranProgram
     * @return \Illuminate\Http\Response
     */
    public function destroy(SasaranProgram $renja)
    {
        if (Auth::user()->rule !== 'Admin') {
            return redirect()->route('renja.index');
        }

        $renja->delete();

        return redirect()->back()->with('success', 'Sasaran Program Berhasil di Hapus');
    }
}
