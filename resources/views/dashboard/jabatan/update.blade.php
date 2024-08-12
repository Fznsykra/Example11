@extends('dashboard.layouts.main')

@section('content')
<h1>Edit Data Jabatan</h1>
    <form method="post" action="/dashboard-jabatan/{{ $jabatan->id }}">
        @method('PUT')
        @csrf
        <div class="mb-3">
            <label for="id" class="form-label">Id</label>
            <input type="number" class="form-control @error('id')is-invalid
            @enderror" value="{{ old('id',$jabatan->id )}}" name="id" id="id" readonly>
            @error('id')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
          </div>
          <div class="mb-3">
            <label for="kode_jabatan" class="form-label">Nama Jabatan</label>
            <input type="kode_jabatan" class="form-control @error('kode_jabatan')is-invalid
            @enderror" value="{{ old('kode_jabatan',$jabatan->kode_jabatan) }}" id="kode_jabatan" name="kode_jabatan">
            @error('kode_jabatan')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
          </div>
          <div class="mb-3">
            <label for="nama_jabatan" class="form-label">Nama Jabatan</label>
            <input type="nama_jabatan" class="form-control @error('nama_jabatan')is-invalid
            @enderror" value="{{ old('nama_jabatan',$jabatan->nama_jabatan ) }}" id="nama_jabatan" name="nama_jabatan">
            @error('nama_jabatan')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
          </div>
          <div class="mb-3">
            <label for="keterangan" class="form-label">Keterangan</label>
            <input type="keterangan" class="form-control @error('keterangan')is-invalid
            @enderror" value="{{ old('keterangan',$jabatan->keterangan ) }}" id="sks" name="keterangan">
            @error('keterangan')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
          </div>
          <div class="mb-3">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
@endsection
