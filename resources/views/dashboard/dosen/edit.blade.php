@extends('dashboard.layouts.main')

@section('content')
<h1>Edit Data Dosen</h1>
    <form method="post" action="/dashboard-dosen/{{ $dosen->id }}">
        @method('PUT')
        @csrf
        <div class="mb-3">
            <label for="nik" class="form-label">Nik</label>
            <input type="number" class="form-control @error('nik')is-invalid
            @enderror" value="{{ old('nik',$dosen->nik )}}" name="nik" id="nik" readonly>
            @error('nik')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
          </div>
          <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="nama" class="form-control"@error('nama')is-invalid
            @enderror" value="{{ old('nama',$dosen->nama) }}" name="nama" id="nama">
            @error('nama')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control"@error('email')is-invalid
            @enderror" value="{{ old('email',$dosen->email ) }}" name="email" id="email">
            @error('email')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
          </div>
          <div class="mb-3">
            <label for="no_telp" class="form-label">No Handphone</label>
            <input type="number" class="form-control" @error('no_telp')is-invalid
            @enderror" value="{{ old('no_telp',$dosen->no_telp ) }}" name="no_telp" id="no_telp">
            @error('no_telp')
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
                @if (old('prodi_id',$dosen->prodi_id) == $prodi->id) <option value="{{ $prodi->id }}
                "selected>{{ $prodi->nama }}</option>
                @else
                <option value="{{ $prodi->id }}">{{ $prodi->nama }}</option>
                @endif
                @endforeach
              </select>
          </div>
          <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <textarea class="form-control" @error('alamat') is-invalid
            @enderror" name="alamat" id="alamat" rows="3"> {{ old('alamat',$dosen->alamat) }}</textarea>
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
