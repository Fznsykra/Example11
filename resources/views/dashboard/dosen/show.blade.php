@extends('dashboard.layouts.main')

@section('content')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1>Detail Data Dosen</h1>
</div>
<div class="col-lg-6">
    <table class="table">
        <tr>
            <td>Nik</td>
            <td>:</td>
            <td>{{ $dosen->nik }}</td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td>{{ $dosen->nama }}</td>
        </tr>
        <tr>
            <td>Email</td>
            <td>:</td>
            <td>{{ $dosen->email }}</td>
        </tr>
        <tr>
            <td>No Telephone</td>
            <td>:</td>
            <td>{{ $dosen->no_telp }}</td>
        </tr>
        <tr>
            <td>Prodi</td>
            <td>:</td>
            <td>{{ $dosen->prodi_id }}</td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td>{{ $dosen->alamat }}/ {{ $dosen->alamat }}</td>
        </tr>

    </table>
</div>

@endsection
