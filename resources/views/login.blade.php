@extends('layouts.main')
@section('container')
<div class="wrapper-content">
    <div class="wrapper-menu">
        <div class="content-login">
            @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            <div class="sub-heading">
                <h1>Login</h1>
            </div>
            <hr>
            <form class="form-login">
                <div class="mb-3">
                    <label for="email" class="form-label">Email Address</label>
                    <input type="email" class="form-control" id="email" name="email">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
                <div class="mb-3 form-check">
                    <div class="component">
                        <div class="remember">
                            <input type="checkbox" class="form-check-input" id="remember" name="remember">
                            <label class="form-check-label" for="remember">Remember Me</label>
                        </div>
                        <div class="forgot">
                            <a href="#">Forgot Password?</a>
                        </div>

                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
            </form>

        </div>
    </div>
    <div class="line"></div>
    <div class="register">
        <h4>Haven't registered yet?</h4>
        <a href="{{ '/register' }}"><button type="submit" class="btn btn-primary">Register</button></a>
    </div>
</div>
</div>
@endsection