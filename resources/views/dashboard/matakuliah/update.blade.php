@extends('dashboard.layouts.main')

@section('content')
<h1>Edit Mata Kuliah</h1>
    <form method="post" action="/dashboard-matakuliah/{{ $matakuliah->id }}">
        @method('PUT')
        @csrf
        <div class="mb-3">
            <label for="id" class="form-label">Id</label>
            <input type="number" class="form-control @error('id')is-invalid
            @enderror" value="{{ old('id',$matakuliah->id )}}" name="id" id="id" readonly>
            @error('id')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
          </div>
          <div class="mb-3">
            <label for="kode_mk" class="form-label">Nama</label>
            <input type="kode_mk" class="form-control @error('kode_mk')is-invalid
            @enderror" value="{{ old('kode_mk',$matakuliah->kode_mk) }}" id="kode_mk" name="kode_mk">
            @error('kode_mk')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
          </div>
          <div class="mb-3">
            <label for="nama_mk" class="form-label">Nama Mata Kuliah</label>
            <input type="nama_mk" class="form-control @error('nama_mk')is-invalid
            @enderror" value="{{ old('nama_mk',$matakuliah->nama_mk ) }}" id="nama_mk" name="nama_mk">
            @error('nama_mk')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
          </div>
          <div class="mb-3">
            <label for="sks" class="form-label">Sks</label>
            <input type="sks" class="form-control @error('sks')is-invalid
            @enderror" value="{{ old('sks',$matakuliah->sks ) }}" id="sks" name="sks">
            @error('sks')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
          </div>
          <div class="mb-3">
            <label for="semester" class="form-label">Semester</label>
            <input type="semester" class="form-control @error('semester')is-invalid
            @enderror" value="{{ old('semester',$matakuliah->semester ) }}" id="semester" name="semester">
            @error('semester')
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
