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
          <form>
            <!-- Email input -->
            <div data-mdb-input-init class="form-outline mb-4">
                <label class="form-label" for="form3Example3">Email address</label>
              <input type="email" id="form3Example3" class="form-control form-control-lg"
                placeholder="Enter a valid email address" />
            </div>

            <!-- Password input -->
            <div data-mdb-input-init class="form-outline mb-3">
                <label class="form-label" for="form3Example4">Password</label>
              <input type="password" id="form3Example4" class="form-control form-control-lg"
                placeholder="Enter password" />
            </div>

            <div class="text-center text-lg-start mt-4 pt-2">
              <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-lg"
                style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
              <p class="small fw-bold mt-2 pt-1 mb-0">Apakah anda tidak memiliki akun? <a href="#!"
                  class="link-danger">Daftar</a></p>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
@endsection
