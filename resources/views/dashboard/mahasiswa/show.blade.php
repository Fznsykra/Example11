@extends('dashboard.layouts.main')

@section('content')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1>Detail Data Mahasiswa</h1>
</div>
<div class="col-lg-6">
    <table class="table">
        <tr>
            <td>Nim</td>
            <td>:</td>
            <td>{{ $mahasiswa->nim }}</td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td>{{ $mahasiswa->nama_lengkap }}</td>
        </tr>
        <tr>
            <td>Tempat lahir</td>
            <td>:</td>
            <td>{{ $mahasiswa->tempat_lahir }}</td>
        </tr>
        <tr>
            <td>Tanggal lahir</td>
            <td>:</td>
            <td>{{ $mahasiswa->tgl_lahir }}</td>
        </tr>
        <tr>
            <td>Email</td>
            <td>:</td>
            <td>{{ $mahasiswa->email }}</td>
        </tr>
        <tr>
            <td>Prodi</td>
            <td>:</td>
            <td>{{ $mahasiswa->prodi->nama }}</td>
        </tr>
        <tr>
            <td>Tempat/tgl Lahir</td>
            <td>:</td>
            <td>{{ $mahasiswa->tempat_lahir }}/ {{ $mahasiswa->tgl_lahir }}</td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td>{{ $mahasiswa->alamat }}/ {{ $mahasiswa->alamat }}</td>
        </tr>

    </table>
</div>

@endsection
