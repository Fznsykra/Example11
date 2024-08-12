@extends('dashboard.layouts.main')

@section('content')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Input Data Dosen</h1>
  </div>

  <div class="row">
    <div class="col-6">


<form action="/dashboard-dosen" method="post">
    @csrf
    <div class="mb-3">
        <label for="nik" class="form-label">NIK</label>
        <input type="number" class="form-control @error('nik') is-invalid
        @enderror" value="{{ old('nik') }}" name="nik" id="nik">

        @error('nik')

        <div class="invalid-feedback">
            {{ $message }}

        </div>

        @enderror

      </div>
      <div class="mb-3">
        <label for="nama_lengkap" class="form-label">Nama</label>
        <input type="text" class="form-control @error('nama') is-invalid
        @enderror" value="{{ old('nama') }}" name="nama" id="nama">
        @error('nama')

        <div class="invalid-feedback">
            {{ $message }}

        </div>

        @enderror


      </div>

      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control @error('email') is-invalid
        @enderror" value="{{ old('email') }}" name="email" id="email">

        @error('email')

        <div class="invalid-feedback">
            {{ $message }}

        </div>

        @enderror
      </div>

      <div class="mb-3">
        <label for="no_telp" class="form-label">Nomor Telepon</label>
        <input type="text" class="form-control @error('no_telp') is-invalid
        @enderror" value="{{ old('no_telp') }}" name="no_telp" id="no_telp">
        @error('no_telp')

        <div class="invalid-feedback">
            {{ $message }}

        </div>

        @enderror

      </div>




      <div class="mb-3">
        <label class="form-label">Prodi</label>
        <select name="prodi_id" class="form-select">
            @foreach ($prodis as $prodi)

            @if (old('prodi_id')==$prodi->id)

            <option value="{{ $prodi-> id }}" selected>{{ $prodi->nama }}</option>

            @else
            <option value="{{ $prodi-> id }}">{{ $prodi->nama }}</option>

            @endif

            @endforeach


        </select>
        @error('prodi')

        <div class="invalid-feedback">
            {{ $message }}

        </div>

        @enderror
      </div>


      </div>

      <div class="mb-3">
        <label for="alamat" class="form-label">Alamat</label>

        <textarea class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat" rows="3">
            {{ old('alamat') }}

        </textarea>

        @error('alamat')

        <div class="invalid-feedback">
            {{ $message }}

        </div>

        @enderror
      </div>
      </div>
      <div class="mb-3">

        <input type="submit" class="btn btn-primary" name="submit">
      </div>
</form>
</div>
</div>
@endsection
