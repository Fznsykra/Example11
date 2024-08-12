@extends('dashboard.layouts.main')
@section('content')
    <h1>Detail Data Program Studi</h1>

    <div class="col-lg-6">
        <table class="table">
            <tr>
            <tr>
                <td>Nama Prodi</td>
                <td>:</td>
                <td>{{ $prodi->nama }}</td>
            </tr>

        </table>

    </div>
@endsection
