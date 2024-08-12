@extends('dashboard.layouts.main')

@section('content')
    <h1 class="mt-3">Daftar User</h1>
    @if(session('pesan'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('pesan') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <a href="/dashboard-user/create" class="btn btn-primary mb-3">Tambah User</a>
    <table class="table table-bordered table-striped">
        <tr class="text-center">
            <th>No</th>
            <th>Nama Lengkap</th>
            <th>Email</th>
            <th>Admin</th>
            <th>Aksi</th>
        </tr>
        @foreach ($user as $dataUser)
        <tr>
            <td>{{ $user->firstItem()+$loop->index }}</td>
            <td>{{ $dataUser->name }}</td>
            <td>{{ $dataUser->email }}</td>
            <td>{{ $dataUser->admin }}</td>
            <td class="text-nowrap">
                <a href="dashboard-user/{{ $dataUser->id }}" class="btn btn-success btn-sm">Detail</a>
                <a href="dashboard-user/{{ $dataUser->id }}/edit" class="btn btn-warning btn-sm">Edit</a>
                {{--  <a href="" class="btn btn-danger">Hapus</a>  --}}
                <form action="/dashboard-user/{{ $dataUser->id }}" method="post" class="d-inline">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-danger btn-sm" onclick="return confirm('Apakah Yakin untuk Menghapus Data ini?')">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    {{ $user->links() }}
    @endsection
