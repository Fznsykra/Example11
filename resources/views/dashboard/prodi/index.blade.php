@extends('dashboard.layouts.main')

@section('content')
    <h1 class="mt-3">Daftar Program Studi</h1>
    @if(session('pesan'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('pesan') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <a href="/dashboard-prodi/create" class="btn btn-primary mb-3">Tambah Data Prodi</a>
    <a href="/eksporpdf-prodi" class="btn btn-danger mb-3">Ekspor PDF</a>
    <table class="table table-bordered table-striped">
        <tr class="text-center">
            <th>No</th>
            <th>Nama Prodi</th>
            <th>Aksi</th>
        </tr>
        @foreach ($prodi as $dataProdi)
        <tr>
            <td>{{ $prodi->firstItem()+$loop->index }}</td>
            <td>{{ $dataProdi->nama }}</td>
            <td class="text-nowrap">
                <a href="dashboard-prodi/{{ $dataProdi->id }}" class="btn btn-success btn-sm">Detail</a>
                <a href="dashboard-prodi/{{ $dataProdi->id }}/edit" class="btn btn-warning btn-sm">Edit</a>
                {{--  <a href="" class="btn btn-danger">Hapus</a>  --}}
                <form action="/dashboard-prodi/{{ $dataProdi->id }}" method="post" class="d-inline">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-danger btn-sm" onclick="return confirm('Apakah Yakin untuk Menghapus Data ini?')">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    {{ $prodi->links() }}
    @endsection
