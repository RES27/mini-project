@extends('layout.index')
@section('content')
<div class="container">
    <div class="page-wrapper">
        <div class="page-content">
            <form class="form-inline my-2 my-lg-0">
                <div class="input-group">
                  <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                  <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="submit">
                        <i class="fa-duotone fa-magnifying-glass"></i>
                    </button>
                    <i class="fa-duotone fa-magnifying-glass"></i>
                  </div>
                </div>
              </form>
        </div>
    </div>


@endsection
