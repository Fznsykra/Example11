@extends('dashboard.layouts.main')

@section('content')
    <h1 class="mt-3">Daftar Mata Kuliah</h1>
    @if(session('pesan'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('pesan') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <a href="/dashboard-matakuliah/create" class="btn btn-primary mb-3">Tambah Data Mata Kuliah</a>
    <table class="table table-bordered table-striped">
        <tr class="text-center">
            <th>No</th>
            <th>Kode</th>
            <th>Nama Matkul</th>
            <th>SKS</th>
            <th>Semester</th>
            <th>Aksi</th>
        </tr>
        @foreach ($matkul as $dataMatakuliah)
        <tr>
            <td>{{ $matkul->firstItem()+$loop->index }}</td>
            <td>{{ $dataMatakuliah->kode_mk }}</td>
            <td>{{ $dataMatakuliah->nama_mk }}</td>
            <td>{{ $dataMatakuliah->sks }}</td>
            <td>{{ $dataMatakuliah->semester }}</td>
            <td class="text-nowrap">
                <a href="dashboard-matakuliah/{{ $dataMatakuliah->id }}" class="btn btn-success btn-sm">Detail</a>
                @can('isAdmin')
                <a href="dashboard-matakuliah/{{ $dataMatakuliah->id }}/edit" class="btn btn-warning btn-sm">Edit</a>
                {{--  <a href="" class="btn btn-danger">Hapus</a>  --}}
                <form action="/dashboard-matakuliah/{{ $dataMatakuliah->id }}" method="post" class="d-inline">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-danger btn-sm" onclick="return confirm('Apakah Yakin untuk Menghapus Data ini?')">Hapus</button>
                </form>
                @endcan
            </td>
        </tr>
        @endforeach
    </table>
    {{ $matkul->links() }}
    @endsection
