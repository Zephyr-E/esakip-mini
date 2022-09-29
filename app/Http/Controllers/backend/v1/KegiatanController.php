<?php

namespace App\Http\Controllers\backend\v1;

use App\Http\Controllers\Controller;
use App\Models\Kegiatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KegiatanController extends Controller
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
            'otorisasi' => 'required',
            'program_id' => 'required',
        ]);

        $data = $request->all();
        Kegiatan::create($data);

        return redirect()->route('renja.index')->with(['success', 'Kegiatan Berhasil di Tambahkan']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kegiatan  $kegiatan
     * @return \Illuminate\Http\Response
     */
    public function show(Kegiatan $kegiatan)
    {
        $data['kegiatan'] = $kegiatan;
        return view('backend.v1.pages.renja.sub-kegiatan.index', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kegiatan  $kegiatan
     * @return \Illuminate\Http\Response
     */
    public function edit(Kegiatan $kegiatan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kegiatan  $kegiatan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kegiatan $kegiatan)
    {
        if (Auth::user()->rule !== 'Admin') {
            return redirect()->route('renja.index');
        }

        $request->validate([
            'name' => 'required',
            'otorisasi' => 'required',
            'program_id' => 'required',
        ]);

        $data = $request->all();
        $kegiatan->update($data);

        return redirect()->route('renja.index')->with('toast_success', 'Kegiatan Berhasil di Perbaharui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kegiatan  $kegiatan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kegiatan $kegiatan)
    {
        if (Auth::user()->rule !== 'Admin') {
            return redirect()->route('renja.index');
        }

        $kegiatan->delete();

        return redirect()->back()->with('success', 'Kegiatan Berhasil di Hapus');
    }
}
