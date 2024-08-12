@extends('layout.main')
@section('content')

<div class="row justify-content-center">
    <div class="col-4">
        <main class="form-signin w-100 m-auto">
            <form method="POST" action="/login">
                @csrf
             <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

              <div class="form-floating">
                <input type="email" class="form-control @error('email')is-invalid
                @enderror" id="floatingInput" name="email" placeholder="name@example.com" value="{{ old('email') }}">
                <label for="floatingInput">Email address</label>
                @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
              </div>
              <div class="form-floating">
                <input type="password" class="form-control" name="password" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
              </div>
              <img src="{{ captcha_src('math') }}" alt="captcha">
     <div class="mt-2"></div>
        <input
            type="text" name="captcha" class="form-control @error('captcha') is-invalid @enderror" placeholder="Please Insert Captch"
            >
         @error('captcha')
         <div class="invalid-feedback">{{ $message }}</div> @enderror
              <div class="form-check text-start my-3">
                <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                  Remember me
                </label>
              </div>
              <button class="btn btn-primary w-100 py-2" type="submit">Sign in</button>
              <p class="text-center mt-3">Don't have an account?please <a href="/register">Register</a></p>
              <p class="mt-5 mb-3 text-body-secondary text-center">&copy;<? = date ('Y')?></p>
            </form>
          </main>
    </div>
</div>
    @endsection
