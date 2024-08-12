@extends('dashboard.layouts.main')
@section('content')
    <h1>Detail Data Jabatan</h1>

    <div class="col-lg-6">
        <table class="table">
            <tr>
                <td>Kode Jabatan</td>
                <td>:</td>
                <td>{{ $jabatan->kode_jabatan }}</td>
            </tr>
            <tr>
                <td>Nama Jabatan</td>
                <td>:</td>
                <td>{{ $jabatan->nama_jabatan }}</td>
            </tr>
            <tr>
                <td>Keterangan</td>
                <td>:</td>
                <td>{{ $jabatan->keterangan }}</td>
            </tr>

        </table>

    </div>
@endsection
