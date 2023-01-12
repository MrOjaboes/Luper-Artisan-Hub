

@extends('layouts.auth')

@section('content')
<section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

          <div class="d-flex justify-content-center py-4">
            <a href="" class="logo d-flex align-items-center w-auto">
              <img src="/AuthPage/assets/img/logo.png" alt="">
              <span class="d-none d-lg-block">NiceAdmin</span>
            </a>
          </div><!-- End Logo -->

          <div class="card mb-3">

            <div class="card-body">

              <div class="pt-4 pb-2">
                <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
                <p class="text-center small">Enter your username & password to login</p>
              </div>

              <form class="row g-3 needs-validation" novalidate method="POST" action="{{ route('register') }}">
                @csrf

                <div class="col-12">
                  <label for="yourUsername" class="form-label">Username</label>
                  <div class="input-group has-validation">
                      <input type="text" name="name" class="form-control" id="yourUsername" required>
                    <div class="invalid-feedback">
                        @error('name')
                            <strong>{{ $message }}</strong>
                    @enderror
                    </div>
                    </div>
                </div>
                <div class="col-12">
                  <label for="Email" class="form-label">Email</label>
                  <div class="input-group has-validation">
                    <span class="input-group-text" id="inputGroupPrepend">@</span>
                    <input type="email" name="email" class="form-control" id="Email" required>
                    <div class="invalid-feedback">
                        @error('email')
                            <strong>{{ $message }}</strong>
                    @enderror
                    </div>
                    </div>
                </div>

                <div class="col-12">
                  <label for="yourPassword" class="form-label">Password</label>
                  <input type="password" name="password" class="form-control" id="yourPassword" required>
                  <div class="invalid-feedback">
                    @error('password')
                    <strong>{{ $message }}</strong>
                    @enderror
                  </div>
                </div>
                <div class="col-12">
                  <label for="password_confirmation" class="form-label">Confirm Password</label>
                  <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" required>
                  <div class="invalid-feedback">
                    @error('password_confirmation')
                    <strong>{{ $message }}</strong>
                    @enderror
                  </div>
                </div>


                <div class="col-12">
                  <button class="btn btn-primary w-100" type="submit">Sign Up</button>
                </div>
                <div class="col-12">
                  <p class="small mb-0">Already have an account? <a href="{{ route('login') }}">Login</a></p>
                </div>
              </form>

            </div>
          </div>

          <div class="credits">
                 Designed by <a href="">Ojabo E.S</a>
          </div>

        </div>
      </div>
    </div>

  </section>

@endsection

