@extends('dashboard.layouts.main')
@section('content')
    <h1>Detail Data Mata Kuliah</h1>

    <div class="col-lg-6">
        <table class="table">
            <tr>
                <td>Kode Matkul</td>
                <td>:</td>
                <td>{{ $matakuliah->kode_mk }}</td>
            </tr>
            <tr>
                <td>Nama Matkul</td>
                <td>:</td>
                <td>{{ $matakuliah->nama_mk }}</td>
            </tr>
            <tr>
                <td>SKS</td>
                <td>:</td>
                <td>{{ $matakuliah->sks }}</td>
            </tr>
            <tr>
                <td>Semester</td>
                <td>:</td>
                <td>{{ $matakuliah->semester}}</td>
            </tr>

        </table>

    </div>
@endsection
