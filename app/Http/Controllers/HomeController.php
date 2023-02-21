<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class HomeController extends Controller
{
    public function index()
    {
        if (request()->ajax()) {
            $pegawai = Pegawai::query();
            return DataTables::of($pegawai)

                ->make();
        }
        return view('home');
    }
}
