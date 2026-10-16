<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuratMasukController extends Controller
{
    public function index() {
        $suratMasuk = [
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

        return view('surat-masuk.index',compact('suratMasuk'));
    }
    public function show($id) {

    $suratMasukDetail = [
        1=>[
                'id' => 1,
                'nomor_surat' => '001/FT/x/2026',
                'tanggal' => '08-10-2026',
                'pengirim' => 'Fakultas Teknik',
                'perihal' => 'Undangan Rapat'
            ],
        2=>[
                'id' => 2,
                'nomor_surat' => '002/FT/x/2026',
                'tanggal' => '08-10-2026',
                'pengirim' => 'BAA',
                'perihal' => 'Undangan Akademik'
            ],
        3=>[
                'id' => 3,
                'nomor_surat' => '003/FT/x/2026',
                'tanggal' => '08-10-2026',
                'pengirim' => 'Fakultas Teknik',
                'perihal' => 'LPM'
            ]
    ];
    $surat = $suratMasukDetail[$id] ?? null;
        return view('surat-masuk.show',compact('surat'));
    }
}
