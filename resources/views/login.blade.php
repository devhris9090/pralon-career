@extends('layout')

@section('content')
<div class="container">

    <div class="row">
        <div class="col-md-12">

            <div class="featured-boxes">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="featured-box featured-box-primary align-left mt-xlg">
                            <div class="box-content">
                                <h4 class="heading-primary text-uppercase mb-md">Login</h4>
                                <form action={{ route('loginUser') }} method="post">
                                    @if (Session::has('success'))
                                        <div class="alert alert-success">{{ Session::get('success') }}</div>
                                    @endif
                                    @if (Session::has('fail'))
                                        <div class="alert alert-danger">{{ Session::get('fail') }}</div>
                                    @endif
                                    @csrf
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label>E-mail Address</label>
                                                <input type="email" name="email" class="form-control input-lg"
                                                @if(isset($_COOKIE["email"])) value="{{ $_COOKIE["email"] }}" @endif>
                                                <span class="text-danger">@error('email')
                                                    {{ $message }}
                                                @enderror</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <a class="pull-right" href="#">(Lost Password?)</a>
                                                <label>Password</label>
                                                <input type="password" name="password" class="form-control input-lg"
                                                @if(isset($_COOKIE["password"])) value="{{ $_COOKIE["password"] }}" @endif>
                                                <span class="text-danger">@error('password')
                                                    {{ $message }}
                                                @enderror</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <span class="remember-box checkbox">
                                                <label for="rememberme">
                                                    <input type="checkbox" id="rememberme" name="rememberme"
                                                    @if (isset($_COOKIE["email"])) checked @endif>Remember Me
                                                </label>
                                            </span>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="submit" value="Login" class="btn btn-primary pull-right mb-xl" data-loading-text="Loading...">
                                        </div>
                                    </div>
                                    <br>
                                    <a href={{ route('register') }}>Didn't have an account ? Register here</a>
                                </form>
                            </div>
                        </div>
                    </div>
                    
                </div>

            </div>
        </div>
    </div>

</div>


@endsection