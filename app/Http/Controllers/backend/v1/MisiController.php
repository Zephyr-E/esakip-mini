<?php

namespace App\Http\Controllers\backend\v1;

use App\Http\Controllers\Controller;
use App\Models\Misi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MisiController extends Controller
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
            return redirect()->route('visi.index');
        }
        $request->validate([
            'nomor' => 'required',
            'name' => 'required',
            'visi_id' => 'required',
        ]);

        $data = $request->all();
        Misi::create($data);

        return redirect()->route('visi.index')->with(['success', 'Misi Berhasil di Tambahkan']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Misi  $misi
     * @return \Illuminate\Http\Response
     */
    public function show(Misi $misi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Misi  $misi
     * @return \Illuminate\Http\Response
     */
    public function edit(Misi $misi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Misi  $misi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Misi $misi)
    {
        if (Auth::user()->rule !== 'Admin') {
            return redirect()->route('visi.index');
        }

        $request->validate([
            'nomor' => 'required',
            'name' => 'required',
        ]);

        $data = $request->all();
        $misi->update($data);

        return redirect()->route('visi.index')->with('toast_success', 'Misi Berhasil di Perbaharui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Misi  $misi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Misi $misi)
    {
        if (Auth::user()->rule !== 'Admin') {
            return redirect()->route('visi.index');
        }

        $misi->delete();

        return redirect()->back()->with('success', 'Misi Berhasil di Hapus');
    }
}
