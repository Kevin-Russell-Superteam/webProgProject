@extends('layouts.main')

@section('container')
<section id="hero">
  <div class="main-title">
    <h1>Build your dream house with us</h1>
  </div>
</section>

{{-- <section id="products">
  <h2>Best Sellers</h2>
  <div class="container">
    <div class="row">
      <div class="product col-lg-4">
        <img src="../img/products/meja-putih.png" alt="product1">
        <div class="product-desc">
          <h2>Meja Putih</h2>
          <h4>Rp. 5.000.000</h4>
        </div>
      </div>

      <div class="product col-lg-4">
        <img src="../img/products/ranjang-putih.png" alt="product1">
        <div class="product-desc">
          <h2>Meja Double Item</h2>
          <h4>Rp. 5.000.000</h4>
        </div>
      </div>

      <div class="product col-lg-4">
        <img src="../img/products/karpet.png" alt="product1">
        <div class="product-desc">
          <h2>Meja Item</h2>
          <h4>Rp. 5.000.000</h4>
        </div>
      </div>
    </div>
  </div> --}}

  <section id="products">
    <div class="container">
      <h2>Best Sellers</h2>
      <div class="row justify-content-between">
        <div class="col-md-3 mb-3">
          <div class="card">
            <img src="../img/products/ranjang-putih.png" class="card-img-top" alt="product1">
            <div class="card-body">
              <h2 class="card-title">Ranjang Putih</h2>
              <p class="card-text fs-5">Rp. 1.000.000</p>
            </div>
          </div>
        </div>

        <div class="col-md-3 mb-3">
          <div class="card">
            <img src="../img/products/ranjang-putih.png" class="card-img-top" alt="product1">
            <div class="card-body">
              <h2 class="card-title">Ranjang Putih</h2>
              <p class="card-text fs-5">Rp. 1.000.000</p>
            </div>
          </div>
        </div>

        <div class="col-md-3 mb-3">
          <div class="card">
            <img src="../img/products/ranjang-putih.png" class="card-img-top" alt="product1">
            <div class="card-body">
              <h2 class="card-title">Ranjang Putih</h2>
              <p class="card-text fs-5">Rp. 1.000.000</p>
            </div>
          </div>
        </div>

        <div class="col-md-3 mb-3">
          <div class="card">
            <img src="../img/products/ranjang-putih.png" class="card-img-top" alt="product1">
            <div class="card-body">
              <h2 class="card-title">Ranjang Putih</h2>
              <p class="card-text fs-5">Rp. 1.000.000</p>
            </div>
          </div>
        </div>
      </div>
    </div>

  </section>



</section>
@endsection