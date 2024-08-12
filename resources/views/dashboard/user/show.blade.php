@extends('dashboard.layouts.main')
@section('content')
    <h1 class="mt-3">Detail Data User</h1>

    <div class="col-lg-6">

        <table class="table">
            <tr>
                <td>Nama Lengkap</td>
                <td>:</td>
                <td>{{ $user->name }}</td>
            </tr>
            <tr>
                <td>Email</td>
                <td>:</td>
                <td>{{ $user->email }}</td>
            </tr>
        </table>
    </div>
@endsection
