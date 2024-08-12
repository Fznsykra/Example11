@extends('dashboard.layouts.main')

@section('content')
    <h1>Edit Data User</h1>

    <div class="row">
        <div class="col-6">
            <form action="/dashboard-user/{{ $user->id }}" method="post">
                @method('PUT')
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Nama Lengkap</label>
                    <input type="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name',$user->name) }}" id="name" name="name">
                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email',$user->email) }}" id="email" name="email">
                    @error('email')
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
