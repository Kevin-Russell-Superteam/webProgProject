@extends('layouts.admin')

@section('container')
<section id="hero">
  <div class="main-title">
    <h1>Build your dream house with us</h1>
  </div>
</section>

<section id="products">
  <div class="container">
    <h2>Best Sellers</h2>
    @if (session()->has('updateItem'))
    <div class="m-auto text-center alert alert-success alert-dismissible fade show mb-3" role="alert">
      {{ session('updateItem') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <div class="row justify-content-start">
      @foreach ($items as $item)
      <div class="col-md-3 mb-3">
        <div class="card">
          <a href="/admin/{{ $item->id }}">
            <img src="{{Storage::url($item->image)}}" class="card-img-top" alt="product1" width="259" height="259">
          </a>
          <div class="card-body">
            <h2 class="card-title">{{$item->name}}</h2>
            <p class="card-text fs-5">Rp. {{$item->price}}</p>
            <div class="d-flex justify-content-around">
              <a href="/admin/{{ $item->id }}/update" class="btn btn-primary w-auto">Update</a>
              <button type="submit" class="btn btn-danger w-auto">Delete</button>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>
</section>
@endsection