@extends('dashboard.layouts.main')

@section('content')
    <h1>Input Data Jabatan</h1>

    <div class="row">
        <div class="col-6">
            <form action="/dashboard-jabatan" method="post">
                @csrf
                <div class="mb-3">
                    <label for="kode_jabatan" class="form-label">Kode Jabatan</label>
                    <input type="text" class="form-control @error('kode_jabatan') is-invalid @enderror" value="{{ old('kode_jabatan') }}" id="kode_jabatan"
                        name="kode_jabatan">
                    @error('kode_jabatan')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror

                </div>
                <div class="mb-3">
                    <label for="nama_jabatan" class="form-label">Nama Jabatan</label>
                    <input type="text" class="form-control @error('nama_jabatan') is-invalid @enderror" value="{{ old('nama_jabatan') }}" id="nama_jabatan" name="nama_jabatan">
                    @error('nama_jabatan')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="keterangan" class="form-label">Keterangan</label>
                    <input type="text" class="form-control @error('keterangan') is-invalid @enderror" value="{{ old('keterangan') }}"id="keterangan" name="keterangan">
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
        </div>
    </div>
@endsection
