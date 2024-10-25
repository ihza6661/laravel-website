@extends('main')
@section('container')
<div class="container text-center">
    <div class="row justify-content-center">
        <div class="col-lg-4 mb-5">
            @if (session()->has('sukses'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('sukses') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif


            @if (session()->has('loginError'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('loginError') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
                <main class="form-signin">
                  <form method="post" action="/login">
                    <img class="mb-4" src="foto_kegiatan/logo.jpg" alt="" width="72" height="57">
                    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>


                    <div class="form-floating">
                      <input
                                        type="email"
                                         class="form-control @error('email') is-invalid @enderror"
                                         id = "email"
                                         name="email"
                                         placeholder="nam@example.com" required value="{{ old ('email') }}">
                                         <label for="email" >Email Address</label>
                                        @error('email')
                                            <div class="invalid feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                    </div>
                    <div class="form-floating">
                      <input type="password" class="form-control" name= "password" placeholder="Password">
                      <label for="floatingPassword">Password</label>
                    </div>


                    <div class="form-check text-start my-3">
                      <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
                      <label class="form-check-label" for="flexCheckDefault">
                        Remember me
                      </label>
                    </div>
                    <p>Don't Have Account? Sign up <a href="register">Here</a></p>
                    <button class="btn btn-primary w-100 py-2" type="submit">Sign in</button>
                    <p class="mt-5 mb-3 text-body-secondary">&copy; 2017–2024</p>
                  </form>
                </main>




            <main class="form-single">


            </main>
        </div>
    </div>
</div>
@endsection





