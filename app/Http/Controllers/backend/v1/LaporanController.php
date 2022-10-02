<?php

namespace App\Http\Controllers\backend\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function index()
    {
        return view('backend.v1.pages.laporan.index');
    }
}
