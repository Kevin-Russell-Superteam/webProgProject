@extends('layouts.admin')

@section('container')
<div class="container w-50">
  <img src="{{Storage::url($item->image)}}" class="card-img-top" alt="product1" width="500" height="500">
  {{ $item->name}}
  Rp. {{ $item->price }}
  {{ $item->type }}
  {{ $item->color }}

</div>

@endsection