@extends('dashboard.layouts.main')

@section('content')
    <h1>Edit Data Prodi</h1>

    <div class="row">
        <div class="col-6">
            <form action="/dashboard-prodi/{{ $prodi->id }}" method="post">
                @method('PUT')
                @csrf
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="nama" class="form-control @error('nama') is-invalid @enderror" value="{{ old('nama',$prodi->nama) }}" id="nama" name="nama">
                    @error('nama')
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
