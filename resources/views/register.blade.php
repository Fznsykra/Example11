@extends('layout.main')
@section('title','Akademik')
@section('content')

<div class="row justify-content-center">

    <div class="col-4">

        <main class="form-signin ">
            <form method="POST" action="/register">
                @csrf
              <h1 class="h3 mb-3 fw-normal">Please Register</h1>

           {{--    <div class="form-floating mb-2">

                <input type="email" class="form-control @error ('email') is-invalid @enderror" id="floatingInput" placeholder="name@example.com " name="email">
                <label for="floatingInput">Email address</label>
                @error('email')


                <div class="invalid-feedback">
                    {{ $message }}

                </div>

                @enderror
              </div>

              --}}

              <div class="form-floating mb-2">
                <input type="name" class="form-control" id="floatingInput" placeholder="name" name="name">
                <label for="floatingInput">Name</label>
              </div>

              <div class="form-floating mb-2">

                <input type="email" class="form-control @error ('email') is-invalid @enderror" id="floatingInput" placeholder="name@example.com " name="email">
                <label for="floatingInput">Email address</label>
                @error('email')


                <div class="invalid-feedback">
                    {{ $message }}

                </div>

                @enderror
              </div>

              <div class="form-floating mb-2">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
                <label for="floatingPassword">Password</label>
              </div>

              <div class="form-floating mb-2">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password_confirmation">
                <label for="floatingPassword">Password Confirm</label>
              </div>
              <img src="{{ captcha_src('math') }}" alt="captcha">
     <div class="mt-2"></div>
        <input
            type="text" name="captcha" class="form-control @error('captcha') is-invalid @enderror" placeholder="Please Insert Captch"
            >
         @error('captcha')
         <div class="invalid-feedback">{{ $message }}</div> @enderror
         <button class="w-100 btn btn-lg btn-primary mb-2" type="submit">Register</button>
         <p class="mt-5 mb-3 text-body-secondary text-center">&copy;<?=date('Y')?></p>

              {{--

              <p class="text-center mt-3">Don"t have an account? Please <a href="/register">Register</a></p>

              <p class="mt-5 mb-3 text-body-secondary text-center">&copy;<?=date('Y')?></p>
              --}}


            </form>

          </main>



    </div>
</div>
@endsection
