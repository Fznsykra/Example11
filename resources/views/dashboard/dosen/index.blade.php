@extends('dashboard.layouts.main')


@section('content')
<h1>Daftar Dosen TI</h1>
@if (session('pesan'))
<div class="alert alert-warning alert-dismissible fade show" role="alert">
    {{ session ('pesan') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
@endif
<a href="/dashboard-dosen/create" class="btn btn-primary mb-3">Tambah Data Dosen</a>
<table class="table table-bordered">
    <tr>
        <th>Nik</th>
        <th>Nama Lengkap</th>
        <th>Email</th>
        <th>no_telp</th>
        <th>Prodi Id</th>
        <th>Alamat</th>
        <th>Aksi</th>
    </tr>
@foreach ($dosens as $dosen)
<tr>
    <td>{{ $dosens->firstItem()+$loop->index }}</td>
    <td>{{ $dosen->nama}}</td>
    <td>{{ $dosen->email}}</td>
    <td>{{ $dosen->no_telp }}</td>
    <td>{{ $dosen->prodi->nama }}</td>
    <td>{{ $dosen->alamat }}</td>
    <td class="text-nowrap">
        <a href="/dashboard-dosen/{{ $dosen->id }}" class="btn btn-success btn-sm">Detail</a>
        <a href="/dashboard-dosen/{{ $dosen->id }}/edit" class="btn btn-warning">Edit</a>
        {{--<a href="" class="btn btn-danger">Hapus</a>--}}
        <form action="/dashboard-dosen/{{ $dosen->id }}" method="post">
            @method('DELETE')
            @csrf
            <button class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin?')">Hapus </button>
        </form>
    </td>
</tr>

@endforeach
</table>
{{ $dosens->links() }}

@endsection

