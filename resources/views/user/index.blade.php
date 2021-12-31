@extends('layouts.user')

@section('container')
<section id="hero">
  <div class="main-title">
    <h1>Build your dream house with us</h1>
  </div>
</section>

<section id="products">
  <div class="container">
    <h2>Best Sellers</h2>
    <div class="row justify-content-between">
      @foreach ($items as $item)
      <div class="col-md-3 mb-3">
        <div class="card">
          <img src="{{Storage::url($item->image)}}" class="card-img-top" alt="product1" width="259" height="259">
          <div class="card-body">
            <a href="/user/{{ $item->id }}">
              <h2 class="card-title">{{$item->name}}</h2>
            </a>
            <p class="card-text fs-5">Rp. {{$item->price}}</p>
            <button type="submit" class="btn btn-primary w-100">Add to Cart</button>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>
</section>
@endsection