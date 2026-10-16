<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuratKeluarController extends Controller
{
    public function index() {
        $suratKeluar = [
            [
                'id' => 1,
                'nomor_surat' => '001/FT/x/2026',
                'tanggal' => '08-10-2026',
                'pengirim' => 'Fakultas Teknik',
                'perihal' => 'Undangan Rapat'
            ],
            [   'id' => 2,
                'nomor_surat' => '002/FT/x/2026',
                'tanggal' => '08-10-2026',
                'pengirim' => 'BAA',
                'perihal' => 'Undangan Akademik'
            ],
            [   'id' => 3,
                'nomor_surat' => '003/FT/x/2026',
                'tanggal' => '08-10-2026',
                'pengirim' => 'Fakultas Teknik',
                'perihal' => 'LPM'
            ]
        ];

        return view('surat-keluar.index',compact('suratKeluar'));
    }
    public function show($id) {

    $suratKeluarDetail = [
        1=>[
                'id' => 1,
                'nomor_surat' => '001/FT/x/2026',
                'tanggal' => '08-10-2026',
                'pengirim' => 'Fakultas Teknik',
                'perihal' => 'Jalan'
            ],
        2=>[
                'id' => 2,
                'nomor_surat' => '002/FT/x/2026',
                'tanggal' => '08-10-2026',
                'pengirim' => 'BAA',
                'perihal' => 'Undangan Main game'
            ],
        3=>[
                'id' => 3,
                'nomor_surat' => '003/FT/x/2026',
                'tanggal' => '08-10-2026',
                'pengirim' => 'Fakultas Teknik',
                'perihal' => 'KKN'
            ]
    ];
    $surat = $suratKeluarDetail[$id] ?? null;
        return view('surat-keluar.show',compact('surat'));
    }
}
