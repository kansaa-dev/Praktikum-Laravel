<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OutgoingLetterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('outgoing_letters')->insert(
        [
            [
                'nomor_surat'=> '001/FT/x/2026',
                'tanggal'    => '2026-10-08',
                'pengirim'   => 'Fakultas Teknik',
                'perihal'    => 'Undangan Rapat',
                'keterangan' => 'Undangan Rapat Koordinasi',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [   
                'nomor_surat' => '002/FT/x/2026',
                'tanggal' => '2026-10-08',
                'pengirim' => 'BAA',
                'perihal' => 'Undangan Akademik',
                'keterangan' => 'Informasi Akademik',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [   
                'nomor_surat' => '003/FT/x/2026',
                'tanggal' => '2026-10-08',
                'pengirim' => 'Fakultas Teknik',
                'perihal' => 'LPM',
                'keterangan' => 'LPM',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]
        );
    }
}
