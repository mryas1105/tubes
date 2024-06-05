@extends('layouts.app')

@section('content')
<div class="container">
<div class="row justify-content-center">
        <div class="col-md-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">Sign In</h2>

              <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="form-outline mb-4">
                <label class="form-label" for="form3Example3cg">Your Email</label>
                  <input type="email" id="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                  @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                  @enderror

                </div>

                <div class="form-outline mb-4">
                            <label for="password" class="form-label">Password</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                <div class="d-flex justify-content-center">
                  <input type="submit" class="btn btn-success btn-block btn-lg" value="Login">
                </div>
                </form>
                {{-- <p class="text-center text-muted mt-5 mb-0">Don't have an account? <a href="{{ route('login') }}" class="fw-bold text-body"><u>Sign up here</u></a></p> --}}


            </div>
          </div>
          </div>
        </div>
      </div>
@endsection
