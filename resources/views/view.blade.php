@extends('layouts.guest')
@section('container')

<section id="products">
  <div class="container">
    <h2 class="text-center mb-5">View Furniture</h2>

    <div class="searchbar d-flex justify-content-end mb-5">
      <form class="d-flex" action="/search" method="post">
        @csrf
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-primary" type="submit">Search</button>
      </form>
    </div>

    <div class="row justify-content-between">
      <div class="col-md-3 mb-3">
        <div class="card">
          <img src="../img/products/ranjang-putih.png" class="card-img-top" alt="product1">
          <div class="card-body">
            <h2 class="card-title">Ranjang Putih</h2>
            <p class="card-text fs-5">Rp. 1.000.000</p>
            <button type="submit" class="btn btn-primary w-100">Add to Cart</button>
          </div>
        </div>
      </div>

      <div class="col-md-3 mb-3">
        <div class="card">
          <img src="../img/products/ranjang-putih.png" class="card-img-top" alt="product1">
          <div class="card-body">
            <h2 class="card-title">Ranjang Putih</h2>
            <p class="card-text fs-5">Rp. 1.000.000</p>
            <button type="submit" class="btn btn-primary w-100">Add to Cart</button>
          </div>
        </div>
      </div>

      <div class="col-md-3 mb-3">
        <div class="card">
          <img src="../img/products/ranjang-putih.png" class="card-img-top" alt="product1">
          <div class="card-body">
            <h2 class="card-title">Ranjang Putih</h2>
            <p class="card-text fs-5">Rp. 1.000.000</p>
            <button type="submit" class="btn btn-primary w-100">Add to Cart</button>
          </div>
        </div>
      </div>

      <div class="col-md-3 mb-3">
        <div class="card">
          <img src="../img/products/ranjang-putih.png" class="card-img-top" alt="product1">
          <div class="card-body">
            <h2 class="card-title">Ranjang Putih</h2>
            <p class="card-text fs-5">Rp. 1.000.000</p>
            <button type="submit" class="btn btn-primary w-100">Add to Cart</button>
          </div>
        </div>
      </div>
    </div>
  </div>

</section>



</section>
@endsection