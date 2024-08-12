@extends('dashboard.layouts.main')


@section('content')
<h1>Daftar Mahasiswa Jurusan TI</h1>
@if (session('pesan'))
<div class="alert alert-warning alert-dismissible fade show" role="alert">
    {{ session ('pesan') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
@endif

<a href="/dashboard-mahasiswa/create" class="btn btn-primary mb-3">Tambah Data Mahasiswa</a>
<a href="/eksporpdf-mahasiswa" class="btn btn-danger mb-3">Ekspor PDF</a>
<table class="table table-bordered">
    <tr>
        <th>Nim</th>
        <th>Nama Lengkap</th>
        <th>Tanggal Lahir</th>
        <th>Email</th>
        <th>Prodi Id</th>
        <th>Alamat</th>
        <th>Aksi</th>
    </tr>
@foreach ($mahasiswas as $mahasiswa)
<tr>
    <td>{{ $mahasiswas->firstItem()+$loop->index }}</td>
    <td>{{ $mahasiswa->nama_lengkap}}</td>
    <td>{{ $mahasiswa->tgl_lahir}}</td>
    <td>{{ $mahasiswa->email }}</td>
    <td>{{ $mahasiswa->prodi->nama }}</td>
    <td>{{ $mahasiswa->alamat }}</td>
    <td class="text-nowrap">
        @can('isAdmin')
        <a href="/dashboard-mahasiswa/{{ $mahasiswa->id }}" class="btn btn-success btn-sm">Detail</a>
        <a href="/dashboard-mahasiswa/{{ $mahasiswa->id }}/edit" class="btn btn-warning">Edit</a>
        {{--<a href="" class="btn btn-danger">Hapus</a>--}}
        <form action="/dashboard-mahasiswa/{{ $mahasiswa->id }}" method="post">
            @method('DELETE')
            @csrf
            <button class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin?')">Hapus </button>
        </form>
        @endcan
    </td>
</tr>

@endforeach
</table>
{{ $mahasiswas->links() }}

@endsection

