@extends('layout_user.index')
@section('content')
<div class="container">
    <div class="page-wrapper">
        <div class="page-content">
            @foreach ($data as $item)
            <section class="mx-auto my-5" style="max-width: 23rem;">
            <div class="card">
                <div class="card-body d-flex flex-row">
                    <img src="{{$item->foto}}" class="rounded-circle me-3" height="50px"
                     width="50px" alt="avatar" />
                <div>
                    <h5 class="card-title font-weight-bold mb-2">{{$item->user_id}}</h5>
                    <p class="card-text"><i class="far fa-clock pe-2"></i>{{$item->created_at}}</p>
                </div>
            </div>
            <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
              <img class="img-fluid" src="{{ asset('storage/images/' . $item->foto)}}"
                alt="Card image cap" />
              <a href="#!">
                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
              </a>
            </div>
            <div class="card-body">
              <p class="card-text collapse" id="collapseContent">
                Recently, we added several exotic new dishes to our restaurant menu. They come from
                countries such as Mexico, Argentina, and Spain. Come to us, have some wine and enjoy
                our juicy meals from around the world.
              </p>
                  <i class="fas fa-comment fa-2x text-muted p-md-1 my-1 me-0" data-mdb-toggle="tooltip"
                    data-mdb-placement="top" title="Share this post"></i>
                  <i class="fas fa-heart fa-2x text-muted p-md-1 my-1 me-0" data-mdb-toggle="tooltip" data-mdb-placement="top"
                    title="I like it"></i>

                </div>
              </div>
            </div>
          </div>
            </section>
            @endforeach
        </div>
    </div>
</div>
@endsection
