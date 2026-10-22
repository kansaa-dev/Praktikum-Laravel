<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OutgoingLetter;

class SuratKeluarController extends Controller
{
    public function index()
    {
        $suratkeluar = OutgoingLetter::all();
        return view('surat-keluar.index',compact('suratkeluar'));
    }

    public function show($id)
    {
        $surat = OutgoingLetter::findOrFail($id);
        return view('surat-keluar.show', compact('surat'));
    }
}