<?php

namespace App\Http\Controllers;

use App\Absensi;
use App\Cuti;
use App\Darurat;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $hadirCount = Absensi::where('status', 'hadir')->whereDate('created_at', date("Y-m-d"))->count();
        $sakitCount = Darurat::where('informasi', 'sakit')->whereDate('created_at', date("Y-m-d"))->count();
        $izinCount = Darurat::where('informasi', 'izin')->whereDate('created_at', date("Y-m-d"))->count();
        $cutiCount = Cuti::whereDate('created_at', date("Y-m-d"))->count();
        return view('home', compact('hadirCount', 'sakitCount', 'izinCount', 'cutiCount'));
    }
}
