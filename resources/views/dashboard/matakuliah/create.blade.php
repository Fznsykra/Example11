@extends('dashboard.layouts.main')

@section('content')
    <h1>Input Data Mata Kuliah</h1>

    <div class="row">
        <div class="col-6">
            <form action="/dashboard-matakuliah" method="post">
                @csrf
                <div class="mb-3">
                    <label for="kode_mk" class="form-label">Kode Matkul</label>
                    <input type="text" class="form-control @error('kode_mk') is-invalid @enderror" value="{{ old('kode_mk') }}" id="kode_mk"
                        name="kode_mk">
                    @error('kode_mk')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror

                </div>
                <div class="mb-3">
                    <label for="nama_mk" class="form-label">Nama Matkul</label>
                    <input type="text" class="form-control @error('nama_mk') is-invalid @enderror" value="{{ old('nama_mk') }}" id="nama_mk" name="nama_mk">
                    @error('nama_mk')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="sks" class="form-label">SKS</label>
                    <input type="text" class="form-control @error('sks') is-invalid @enderror" value="{{ old('sks') }}"id="sks" name="sks">
                    @error('sks')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="semester" class="form-label">Semester</label>
                    <input type="text" class="form-control @error('semester') is-invalid @enderror" value="{{ old('semester') }}" id="semester" name="semester">
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
        </div>
    </div>
@endsection
