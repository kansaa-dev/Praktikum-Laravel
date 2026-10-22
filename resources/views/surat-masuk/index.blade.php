@extends('layout.app')

@section('title', 'Halaman Surat Masuk')

@section('content')

    <h1>Halaman Surat Masuk </h1>
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
            @forelse ($suratmasuk as $surat)
            <tr>
               <td>{{ $loop->iteration }}</td>
               <td>{{ $surat->nomor_surat }}</td>
               <td>{{ $surat->tanggal }}</td>
               <td>{{ $surat->pengirim }}</td>
               <td>{{ $surat->perihal }}</td>
               <td>
                <a href="{{ route('surat-masuk.show', $surat ['id']) }}"> Detail Surat </a>
               </td>
           </tr>
           @empty
           <tr>
                <td>Belum ada data surat Masuk</td>
            </tr>
            @endforelse
            <tr>
                <td colspan="6">Belum ada surat Masuk</td>
            </tr>
        </tbody>
    </table>

    @endsection