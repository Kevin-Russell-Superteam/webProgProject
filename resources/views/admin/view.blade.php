@extends('layouts.guest')
@section('container')

<section id="products">
  <div class="container">
    <h2 class="text-center mb-5">{{ $pageTitle }}</h2>

    <div class="searchbar d-flex justify-content-end mb-5">
      <form class="d-flex" action="/admin/view/search" method="post">
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
          <img src="{{Storage::url($item->image)}}" class="card-img-top" alt="product1" width="259" height="259">
          <div class="card-body">
            <a href="/admin/{{ $item->id }}">
              <h2 class="card-title">{{$item->name}}</h2>
            </a>
            <p class="card-text fs-5">Rp. {{$item->price}}</p>
            <div class="d-flex justify-content-around">
              <button type="submit" class="btn btn-primary w-auto">Update</button>
              <button type="submit" class="btn btn-danger w-auto">Delete</button>
            </div>
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