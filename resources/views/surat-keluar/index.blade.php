@extends('layout.app')

@section('title', 'Halaman Surat Keluar')

@section('content')

    <h1>Halaman Surat Keluar </h1>
    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>No</th>
                <th>Nomer Surat</th>    
                <th>Tanggal</th>
                <th>Pengirim</th>
                <th>Perihal</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($suratKeluar as $surat)
            <tr>
               <td>{{ $loop->iteration }}</td>
               <td>{{ $surat['nomor_surat'] }}</td>
               <td>{{ $surat['tanggal'] }}</td>
               <td>{{ $surat['pengirim'] }}</td>
               <td>{{ $surat['perihal'] }}</td>
               <td>
                <a href="{{ route('surat-keluar.show', $surat ['id']) }}"> Detail Surat </a>
               </td>
           </tr>
            @endforeach
        </tbody>
    </table>

    @endsection