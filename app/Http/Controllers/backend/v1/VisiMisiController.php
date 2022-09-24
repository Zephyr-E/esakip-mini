<?php

namespace App\Http\Controllers\backend\v1;

use App\Http\Controllers\Controller;
use App\Models\Misi;
use App\Models\Visi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class VisiMisiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['visi_misis'] = Visi::all();
        return view('backend.v1.pages.visi-misi.index', $data);
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
            return redirect()->route('visi-misi.index');
        }

        if ($request->query('tipe_tambah') == 'visi') {
            $request->validate([
                'name' => 'required',
                'tahun_awal' => 'required',
                'tahun_akhir' => 'required',
            ]);

            $data = $request->all();
            $data['aktif'] = 0;
            Visi::create($data);
        } elseif ($request->query('tipe_tambah') == 'misi') {
            $request->validate([
                'nomor' => 'required',
                'name' => 'required',
            ]);

            $data = $request->all();
            $data['visi_id'] = $request->query('visi_id');
            Misi::create($data);
        }

        return redirect()->route('visi-misi.index')->with(['success', 'Visi & Misi Berhasil di Tambahkan']);
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
    public function edit(Visi $visi_misi)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Visi  $visi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Visi $visi_misi)
    {
        if (Auth::user()->rule !== 'Admin') {
            return redirect()->route('visi-misi.index');
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
        $visi_misi->update($data);

        return redirect()->route('visi-misi.index')->with('toast_success', 'Visi Berhasil di Perbaharui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Visi  $visi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Visi $visi_misi)
    {
        if (Auth::user()->rule !== 'Admin') {
            return redirect()->route('visi-misi.index');
        }

        $visi_misi->delete();

        // $query = DB::table('visis')->where('id', '=', $request->query('id'))->delete();
        return redirect()->back()->with('success', 'Visi & Misi Berhasil di Hapus');
    }
}
