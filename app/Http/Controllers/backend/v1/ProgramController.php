<?php

namespace App\Http\Controllers\backend\v1;

use App\Http\Controllers\Controller;
use App\Models\Program;
use App\Models\SasaranRenstra;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProgramController extends Controller
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
            'name' => 'required',
            'sasaran_program_id' => 'required',
            // 'kendala' => 'required',
            // 'solusi' => 'required',
            // 'tindak_lanjut' => 'required',
            'otorisasi' => 'required',
            'apbd' => 'required',
            // 'tahun' => 'required',
        ]);

        $data = $request->all();
        Program::create($data);

        return redirect()->route('renja.index')->with(['success', 'Program Berhasil di Tambahkan']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Program  $program
     * @return \Illuminate\Http\Response
     */
    public function show(Program $program)
    {
        $data['program'] = $program;
        // dd($data);
        return view('backend.v1.pages.renja.sasaran-kegiatan.index', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Program  $program
     * @return \Illuminate\Http\Response
     */
    public function edit(Program $renja)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Program  $program
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Program $program)
    {
        if (Auth::user()->rule !== 'Admin') {
            return redirect()->route('renja.index');
        }

        $request->validate([
            'name' => 'required',
            // 'kendala' => 'required',
            // 'solusi' => 'required',
            // 'tindak_lanjut' => 'required',
            'otorisasi' => 'required',
            'apbd' => 'required',
            // 'tahun' => 'required',
        ]);

        $data = $request->all();
        $program->update($data);

        return redirect()->route('renja.index')->with(['success', 'Program Berhasil di Perbaharui']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Program  $program
     * @return \Illuminate\Http\Response
     */
    public function destroy(Program $program)
    {
        if (Auth::user()->rule !== 'Admin') {
            return redirect()->route('renja.index');
        }

        $program->delete();

        return redirect()->back()->with('success', 'Program Berhasil di Hapus');
    }
}
