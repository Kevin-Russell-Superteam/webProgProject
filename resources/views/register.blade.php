@extends('layouts/main')
@section('container')
    
<div class="wrapper-register">
    <form>
        <div class="mb-3 sub-heading">
            <h1>Register</h1>
        </div>
        <div class="mb-3 full-name">
            <div class="first-name">
                <label for="InputEmail1" class="form-label">First Name</label>
                <input type="email" class="form-control" id="InputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="space">

            </div>
            <div class="last-name">
                <label for="InputEmail1" class="form-label">Last Name</label>
                <input type="email" class="form-control" id="InputEmail1" aria-describedby="emailHelp">
            </div>
        </div>
        <div class="mb-3">
            <label for="InputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="InputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="InputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="InputPassword1">
        </div>
        <div class="mb-3">
            <label for="InputPassword1" class="form-label">Re-Type Password</label>
            <input type="password" class="form-control" id="InputPassword1">
        </div>
        <button type="submit" class="btn btn-primary">Register</button>

    </form>
</div>

@endsection