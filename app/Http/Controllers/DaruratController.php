<?php

namespace App\Http\Controllers;

use App\Darurat;
use Illuminate\Http\Request;

class DaruratController extends Controller
{
    public function index()
    {
        $darurats = Darurat::all();

        return view('darurat.index', compact('darurats'));
    }
}
