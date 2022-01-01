@extends('layouts.user')
@section('container')

<section id="products">
  <div class="container">
    <h2 class="text-center mb-5">Welcome to JHFurniture, {{ Auth::user()->name }}</h2>

    <div class="searchbar d-flex justify-content-end mb-5">
      <form class="d-flex" action="/user/view/search" method="post">
        @csrf
        <input class="form-control me-2" type="search" name="searchQuery" placeholder="Search by furniture's name"
          aria-label="Search">
        <button class="btn btn-primary" type="submit">Search</button>
      </form>
    </div>

    <div class="row justify-content-start">
      @foreach ($items as $item)
      <div class="col-md-3 mb-3">
        <div class="card">
          <a href="/user/{{ $item->id }}">
            <img src="{{Storage::url($item->image)}}" class="card-img-top" alt="product1" width="259" height="259">
          </a>
          <div class="card-body">
            <h2 class="card-title">{{$item->name}}</h2>
            <p class="card-text fs-5">Rp. {{$item->price}}</p>
            <button type="submit" class="btn btn-primary w-100">Add to Cart</button>
          </div>
        </div>
      </div>
      @endforeach
    </div>
    @if (count($items) > 1)
    <div class="d-flex justify-content-end">
      {{ $items->links() }}
    </div>
    @endif
  </div>

</section>



</section>
@endsection