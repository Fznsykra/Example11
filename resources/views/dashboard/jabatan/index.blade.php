@extends('dashboard.layouts.main')

@section('content')
    <h1 class="mt-3">Daftar Jabatan</h1>
    @if(session('pesan'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('pesan') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <a href="/dashboard-jabatan/create" class="btn btn-primary mb-3">Tambah Data Jabatan</a>
    <table class="table table-bordered table-striped">
        <tr class="text-center">
            <th>No</th>
            <th>Kode Jabatan</th>
            <th>Nama Jabatan</th>
            <th>Keterangan</th>
            <th>Aksi</th>
        </tr>
        @foreach ($jabatan as $dataJabatan)
        <tr>
            <td>{{ $jabatan->firstItem()+$loop->index }}</td>
            <td>{{ $dataJabatan->kode_jabatan }}</td>
            <td>{{ $dataJabatan->nama_jabatan }}</td>
            <td>{{ $dataJabatan->keterangan }}</td>
            <td class="text-nowrap">
                <a href="dashboard-jabatan/{{ $dataJabatan->id }}" class="btn btn-success btn-sm">Detail</a>
                @can('isAdmin')
                <a href="dashboard-jabatan/{{ $dataJabatan->id }}/edit" class="btn btn-warning btn-sm">Edit</a>
                {{--  <a href="" class="btn btn-danger">Hapus</a>  --}}
                <form action="/dashboard-jabatan/{{ $dataJabatan->id }}" method="post" class="d-inline">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-danger btn-sm" onclick="return confirm('Apakah Yakin untuk Menghapus Data ini?')">Hapus</button>
                </form>
                @endcan
            </td>
        </tr>
        @endforeach
    </table>
    {{ $jabatan->links() }}
    @endsection
