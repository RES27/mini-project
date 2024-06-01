@extends('layout_auth.index')
@section('content')
<section class="container-fluid min-vh-100 d-flex align-items-center justify-content-center bg-dark">
    <div class="container-fluid h-custom">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-md-6 col-lg-9 col-xl-5 d-flex justify-content-end ">
          <img src="{{ asset('images/logo-medsos.png')}}"
            class="img-fluid" alt="Sample image">
        </div>
        <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
            <form action="{{ route('onregis') }}" method="POST">
                @csrf
                <!-- Username input -->
                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div data-mdb-input-init class="form-outline">
                            <label class="form-label text-light" for="username">Username</label>
                            <input type="text" id="username" name="username" class="form-control form-control-lg"
                                placeholder="Enter Username" />
                            @error('username')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div data-mdb-input-init class="form-outline">
                            <label class="form-label text-light" for="name">Nama</label>
                            <input type="text" id="name" name="name" class="form-control form-control-lg"
                                placeholder="Enter Name" />
                            @error('name')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <!-- Email input -->
                <div data-mdb-input-init class="form-outline mb-4">
                    <label class="form-label text-light" for="form3Example3">Email address</label>
                    <input type="email" id="form3Example3" name="email" class="form-control form-control-lg"
                        placeholder="Enter a valid email address" />
                    @error('email')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <!-- Password input -->
                <div data-mdb-input-init class="form-outline mb-3">
                    <label class="form-label text-light" for="form3Example4">Password</label>
                    <input type="password" id="form3Example4" name="password" class="form-control form-control-lg"
                        placeholder="Enter password" />
                    @error('password')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <!-- Konfirmasi Password input -->
                <div data-mdb-input-init class="form-outline mb-3">
                    <label class="form-label text-light" for="confirmPassword">Konfirmasi Password</label>
                    <input type="password" id="confirmPassword" name="password_confirmation"
                        class="form-control form-control-lg" placeholder="Enter konfirmasi password" />
                </div>
                <div class="text-center text-lg-start mt-4 pt-2">
                    <button type="submit" data-mdb-button-init data-mdb-ripple-init
                        class="btn btn-primary btn-lg">Daftar</button>
                    <p class="small fw-bold mt-2 pt-1 mb-0 text-light">Sudah memiliki akun? <a href=""
                            class="link-danger">Masuk</a></p>
                </div>
            </form>
        </div>
      </div>
    </div>
  </section>
@endsection
