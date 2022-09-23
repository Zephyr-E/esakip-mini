<?php

namespace App\Http\Controllers\backend\v1;

use App\Http\Controllers\Controller;
use App\Models\Misi;
use App\Models\Visi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

        $request->validate([
            'name' => 'required',
            'tahun_awal' => 'required',
            'tahun_akhir' => 'required',
        ]);

        $data = $request->all();
        $data['aktif'] = 0;
        Visi::create($data);

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
    public function edit(Visi $visi)
    {
        $data['visi'] = $visi;
        dd($visi);
        return view('backend.v1.pages.visi-misi.edit', $data);
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
        //
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
            return redirect()->route('visi-misi.index');
        }

        dd($visi);

        $query = $visi->delete();
        // check data deleted or not
        if ($query > 0) {
            return response()->json('202 Accepted', 202);
        } else {
            return response()->json('404 Not Found', 404);
        }

        // $visi->delete();
        // return redirect()->back()->with('toast_success', 'Visi & Misi Berhasil di Hapus');
    }
}
