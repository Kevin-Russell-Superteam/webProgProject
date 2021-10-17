@extends('layouts.main')
@section('container')
<div class="wrapper-content">
    <div class="wrapper-menu">
        <div class="content-login">
            <div class="sub-heading">
                <h1>Login</h1>
            </div>
            <hr>
            <form>
                <div class="mb-3">
                <label for="InputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="InputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                <label for="InputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="InputPassword1">
                </div>
                <div class="mb-3 form-check">
                    <div class="component">
                        <div class="remember">
                            <input type="checkbox" class="form-check-input" id="Check1">
                            <label class="form-check-label" for="Check1">Remember Me</label>
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
            <h4>Haven't got JH Account yet?</h4>
            <button type="submit" class="btn btn-primary">Register</button>
        </div>
    </div>
</div>
@endsection