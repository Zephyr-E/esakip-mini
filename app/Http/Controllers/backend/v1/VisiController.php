<?php

namespace App\Http\Controllers\backend\v1;

use App\Http\Controllers\Controller;
use App\Models\Visi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class VisiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['visis'] = Visi::all();
        return view('backend.v1.pages.visi.index', $data);
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
            return redirect()->route('visi.index');
        }

        $request->validate([
            'name' => 'required',
            'tahun_awal' => 'required',
            'tahun_akhir' => 'required',
        ]);

        $data = $request->all();
        $data['aktif'] = 0;
        Visi::create($data);

        return redirect()->route('visi.index')->with(['success', 'Visi Berhasil di Tambahkan']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Visi  $visi
     * @return \Illuminate\Http\Response
     */
    public function show(Visi $visi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Visi  $visi
     * @return \Illuminate\Http\Response
     */
    public function edit(Visi $visi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Visi  $visi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Visi $visi)
    {
        if (Auth::user()->rule !== 'Admin') {
            return redirect()->route('visi.index');
        }
        $request->validate([
            'name' => 'required',
            'tahun_awal' => 'required',
            'tahun_akhir' => 'required',
            'aktif' => 'required'
        ]);

        $data = $request->all();

        //menon aktif kan semua record yang aktif
        $deactivated = Visi::all();
        foreach ($deactivated as $deactivate) {
            if ($deactivate->aktif == 1) {
                DB::table('visis')->where('id', $deactivate->id)->update(['aktif' => 0]);
            }
        }

        //update record yang ingin diaktif kan
        $visi->update($data);

        return redirect()->route('visi.index')->with('toast_success', 'Visi Berhasil di Perbaharui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Visi  $visi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Visi $visi)
    {
        if (Auth::user()->rule !== 'Admin') {
            return redirect()->route('visi.index');
        }

        $visi->delete();

        // $query = DB::table('visis')->where('id', '=', $request->query('id'))->delete();
        return redirect()->back()->with('success', 'Visi & Misi Berhasil di Hapus');
    }
}
