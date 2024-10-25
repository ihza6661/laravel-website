@extends('main')
@section('container')
<div class="container text-center">
    <div class="row justify-content-center">
        <div class="col-lg-4 mb-5">
                <main class="form-signin">
                  <form method="post" action="/login">
                    <img class="mb-4" src="foto_kegiatan/logo.jpg" alt="" width="72" height="57">
                    <h1 class="h3 mb-3 fw-normal">Please sign up</h1>


                    <div class="form-floating">
                      <input
                                        type="text"
                                         class="form-control @error('name') is-invalid @enderror"
                                         id = "name"
                                         name="name"
                                         placeholder="Name" required value="{{ old ('name') }}">
                                         <label for="name" >Name</label>
                                        @error('name')
                                            <div class="invalid feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                    </div>
                    <div class="form-floating">
                        <input
                                          type="text"
                                           class="form-control @error('username') is-invalid @enderror"
                                           id = "username"
                                           name="username"
                                           placeholder="username" required value="{{ old ('username') }}">
                                           <label for="username" >Username</label>
                                          @error('username')
                                              <div class="invalid feedback">
                                                  {{ $message }}
                                              </div>
                                          @enderror
                      </div>
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
                        <input
                                          type="password"
                                           class="form-control @error('password') is-invalid @enderror"
                                           id = "password"
                                           name="password"
                                           placeholder="Password" required value="{{ old ('password') }}">
                                           <label for="email" >Password</label>
                                          @error('password')
                                              <div class="invalid feedback">
                                                  {{ $message }}
                                              </div>
                                          @enderror
                      </div>


                    <p>Back? <a href="login">Here</a></p>
                    <button class="btn btn-primary w-100 py-2" type="submit">Sign up</button>
                    <p class="mt-5 mb-3 text-body-secondary">&copy; 2017–2024</p>
                  </form>
                </main>




            <main class="form-single">


            </main>
        </div>
    </div>
</div>
@endsection



