@extends('layouts.admin')
@section('container')

<section id="products">
  <div class="container">
    <h2 class="text-center mb-5">Admin's Profile</h2>
    <div class="row d-flex justify-content-center my-3">
      <div class="col-2">
        <p>Full Name</p>
      </div>
      <div class="col-2">
        <p>{{ Auth::user()->name }}</p>
      </div>
    </div>
    <div class="row d-flex justify-content-center my-3">
      <div class="col-2">
        <p>Email</p>
      </div>
      <div class="col-2">
        <p>{{ Auth::user()->email }}</p>
      </div>
    </div>
    <div class="row d-flex justify-content-center my-3">
      <div class="col-2">
        <p>Role</p>
      </div>
      <div class="col-2">
        <p>{{ Auth::user()->role }}</p>
      </div>
    </div>
    <div class="row m-auto text-center">
      <div class="col">
        <form action="/logout" method="post">
          @csrf
          <button type="submit" class="btn btn-primary">Logout</button>
        </form>
      </div>
      <div class="col">
        <a href="#" class="btn btn-primary">View All User's Transaction</a>
      </div>
      <div class="col">
        <a href="#" class="btn btn-primary ">Update Profile</a>
      </div>
    </div>
  </div>
</section>
@endsection