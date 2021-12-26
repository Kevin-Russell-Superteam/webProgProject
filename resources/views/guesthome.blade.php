@extends('layouts.guest')

@section('container')
<section id="hero">
  <div class="main-title">
    <h1>Build your dream house with us</h1>
  </div>
</section>

<section id="products">
  <div class="container">
    @if (session()->has('logoutMessage'))
    <div class="alert alert-secondary alert-dismissible fade show" role="alert">
      {{ session('logoutMessage') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <h2>Best Sellers</h2>
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