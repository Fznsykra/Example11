@extends('dashboard.layouts.main')

@section('content')
<h1>Input Data Mahasiswa</h1>
    <form action="/dashboard-mahasiswa" method="post">
        @csrf
        <div class="mb-3">
            <label for="nim" class="form-label">Nim</label>
            <input type="number" class="form-control @error('nim')is-invalid
            @enderror" value="{{ old('nim') }}" name="nim" id="nim">
            @error('nim')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
          </div>
          <div class="mb-3">
            <label for="nama_lengkap" class="form-label">Nama</label>
            <input type="nama_lengkap" class="form-control"@error('nama_lengkap')is-invalid
            @enderror" value="{{ old('nama_lengkap') }}" name="nama_lengkap" id="nama_lengkap">
            @error('nama_lengkap')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
          </div>
          <div class="mb-3">
            <label for="tempat_lahir" class="form-label">tempat</label>
            <input type="tempat_lahir" class="form-control"@error('tempat_lahir')is-invalid
            @enderror" value="{{ old('tempat_lahir') }}" name="tempat_lahir" id="tempat_lahir">
            @error('tempat_lahir')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
          </div>
          <div class="mb-3">
            <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
            <input type="date" class="form-control" @error('tgl_lahir')is-invalid
            @enderror" value="{{ old('tgl_lahir') }}" name="tgl_lahir" id="tgl_lahir">
            @error('tgl_lahir')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" @error('email')is-invalid
            @enderror" value="{{ old('email') }}" name="email" id="email">
            @error('email')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
          </div>
          <div class="mb-3">
            <label for="prodi" class="form-label">Prodi</label>
            <select name="prodi_id" class="form-select" required>
                <option selected>--Pilih Prodi--</option>
                @foreach ($prodis as $prodi )
                @if (old('prodi_id')==$prodi->id)
                <option value="{{ $prodi->id }}"selected>{{ $prodi->nama }}</option>
                @else
                <option value="{{ $prodi->id }}">{{ $prodi->nama }}</option>
                @endif
                @endforeach
              </select>
          </div>
          <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <textarea class="form-control" @error('alamat') is-invalid
            @enderror" name="alamat" id="alamat" rows="3" > {{ old('alamat') }}</textarea>
            @error('alamat')
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
