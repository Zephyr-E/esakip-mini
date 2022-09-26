<?php

namespace App\Http\Controllers\backend\v1;

use App\Http\Controllers\Controller;
use App\Models\SasaranRpjmd;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SasaranRpjmdController extends Controller
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
            return redirect()->route('tujuan.index');
        }

        $request->validate([
            'nomor' => 'required',
            'name' => 'required',
            'tujuan_rpjmd_id' => 'required',
        ]);

        $data = $request->all();
        SasaranRpjmd::create($data);

        return redirect()->route('tujuan.index')->with(['success', 'Sasaran Berhasil di Tambahkan']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SasaranRpjmd  $sasaranRpjmd
     * @return \Illuminate\Http\Response
     */
    public function show(SasaranRpjmd $sasaranRpjmd)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SasaranRpjmd  $sasaranRpjmd
     * @return \Illuminate\Http\Response
     */
    public function edit(SasaranRpjmd $sasaranRpjmd)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SasaranRpjmd  $sasaranRpjmd
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SasaranRpjmd $sasaran)
    {
        if (Auth::user()->rule !== 'Admin') {
            return redirect()->route('tujuan.index');
        }
        $request->validate([
            'nomor' => 'required',
            'name' => 'required',
        ]);

        $data = $request->all();
        $sasaran->update($data);

        return redirect()->route('tujuan.index')->with('toast_success', 'Sasaran Berhasil di Perbaharui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SasaranRpjmd  $sasaranRpjmd
     * @return \Illuminate\Http\Response
     */
    public function destroy(SasaranRpjmd $sasaran)
    {
        if (Auth::user()->rule !== 'Admin') {
            return redirect()->route('tujuan.index');
        }

        $sasaran->delete();

        // $query = DB::table('visis')->where('id', '=', $request->query('id'))->delete();
        return redirect()->back()->with('success', 'Sasaran Berhasil di Hapus');
    }
}
