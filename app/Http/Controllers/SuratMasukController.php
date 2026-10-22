<?php

namespace App\Http\Controllers;

use App\Models\IncommingLetter;
use Illuminate\Http\Request;
use App\Models\IncomingLetter;

class SuratMasukController extends Controller
{
    public function index()
    {
        $suratmasuk = IncomingLetter::all();
        return view('surat-masuk.index',compact('suratmasuk'));
    }

    public function show($id)
    {
        $surat = IncomingLetter::findOrFail($id);
        return view('surat-masuk.show', compact('surat'));
    }
}