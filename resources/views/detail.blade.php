@extends('layouts.guest')

@section('container')
<div class="container">
  <h1 class="text-center">{{ $item->name }}</h1>
  <div class="item-showcase d-flex justify-content-center">
    <div class="image col-3 mt-5">
      <img src="{{Storage::url($item->image)}}" class="border" alt="product1" width="300" height="300">
    </div>
    <div class="item-description ms-2 mt-5">
      <h4 class="pb-3">Name: {{ $item->name }}</h4>
      <h4 class="pb-3">Price: Rp. {{ $item->price }}</h4>
      <h4 class="pb-3">Furniture Type: {{ $item->type }}</h4>
      <h4 class="pb-3">Color: {{ $item->color }}</h4>
      <a href="{{ url()->previous() }}" class="btn btn-secondary w-auto me-3">Previous</a>
      <button type="submit" class="btn btn-primary w-auto">Add to Cart</button>
    </div>
  </div>
</div>
@endsection