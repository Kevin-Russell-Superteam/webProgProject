@extends('layouts.main')

@section('container')
<section id="hero">
  <div class="main-title">
    <h1>Build your dream house with us</h1>
  </div>
</section>

<section id="products">
  <h2>Best Sellers</h2>
  <div class="grid mt-4">
    <div class="product">
      <img src="../img/products/meja-putih.jpeg" alt="product1">
      <div class="product-desc">
        <h2>Meja Putih</h2>
        <h4>Rp. 5.000.000</h4>
      </div>
    </div>

    <div class="product">
      <img src="../img/products/meja-double-item.jpeg" alt="product1">
      <div class="product-desc">
        <h2>Meja Double Item</h2>
        <h4>Rp. 5.000.000</h4>
      </div>
    </div>

    <div class="product">
      <img src="../img/products/meja-item.jpeg" alt="product1">
      <div class="product-desc">
        <h2>Meja Item</h2>
        <h4>Rp. 5.000.000</h4>
      </div>
    </div>

    <div class="product">
      <img src="../img/products/sofa-item.jpeg" alt="product1">
      <div class="product-desc">
        <h2>Sofa Item</h2>
        <h4>Rp. 5.000.000</h4>
      </div>
    </div>
  </div>


</section>
@endsection