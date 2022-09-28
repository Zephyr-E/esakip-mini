<?php

namespace App\Http\Controllers\backend\v1;

use App\Http\Controllers\Controller;
use App\Models\Misi;
use App\Models\TujuanRpjmd;
use App\Models\Visi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class TujuanRpjmdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $data['visi'] = Visi::where('aktif', 1)->first();
        $data['misis'] = Misi::where('visi_id', $data['visi']->id)->get()->sortBy('nomor');

        // $data['tujuan_rpjmds'] = TujuanRpjmd::whereHas('misi.visi', function ($query) {
        //     return $query->where('aktif', 1);
        // })->get();

        return view('backend.v1.pages.tujuan.index', $data);
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
            return redirect()->route('tujuan.index');
        }

        $request->validate([
            'nomor' => 'required',
            'name' => 'required',
            'misi_id' => 'required',
        ]);

        $data = $request->all();
        TujuanRpjmd::create($data);

        return redirect()->route('tujuan.index')->with(['success', 'Tujuan Berhasil di Tambahkan']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TujuanRpjmd  $tujuanRpjmd
     * @return \Illuminate\Http\Response
     */
    public function show(TujuanRpjmd $tujuanRpjmd)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TujuanRpjmd  $tujuanRpjmd
     * @return \Illuminate\Http\Response
     */
    public function edit(TujuanRpjmd $tujuanRpjmd)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TujuanRpjmd  $tujuanRpjmd
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TujuanRpjmd $tujuan)
    {
        if (Auth::user()->rule !== 'Admin') {
            return redirect()->route('tujuan.index');
        }
        $request->validate([
            'nomor' => 'required',
            'name' => 'required',
        ]);

        $data = $request->all();
        $tujuan->update($data);

        return redirect()->route('tujuan.index')->with('toast_success', 'Tujuan Berhasil di Perbaharui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TujuanRpjmd  $tujuanRpjmd
     * @return \Illuminate\Http\Response
     */
    public function destroy(TujuanRpjmd $tujuan)
    {
        if (Auth::user()->rule !== 'Admin') {
            return redirect()->route('tujuan.index');
        }

        $tujuan->delete();

        return redirect()->back()->with('success', 'Tujuan Berhasil di Hapus');
    }
}
