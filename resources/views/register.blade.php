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
                                <h4 class="heading-primary text-uppercase mb-md">Register An Account</h4>
                                <form action={{ route('registerUser') }} method="post">
                                    @if (Session::has('success'))
                                        <div class="alert alert-success">{{ Session::get('success') }}</div>
                                    @endif
                                    @if (Session::has('fail'))
                                    <div class="alert alert-fail">{{ Session::get('fail') }}</div>
                                    @endif
                                    @csrf
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label for="full_name">Full Name</label>
                                                <input type="text" name="full_name" class="form-control input-lg" value="{{ old('full_name') }}">
                                                <span class="text-danger">@error('full_name')
                                                    {{ $message }}
                                                @enderror</span>
                                            </div>
                                        </div>
                                    </div><div class="row">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label for="email">E-mail Address</label>
                                                <input type="text" name="email" class="form-control input-lg" value="{{ old('email') }}">
                                                <span class="text-danger" style="font-size: 11px">@error('email')
                                                    {{ $message }}
                                                @enderror 
                                                *gunakan email google (x@gmail.com) </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-md-6">
                                                <label for="password">Password</label>
                                                <input type="password" name="password" class="form-control input-lg">
                                                <span class="text-danger">@error('password')
                                                    {{ $message }}
                                                @enderror</span>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="password_confirmation">Re-enter Password</label>
                                                <input type="password" name="password_confirmation" class="form-control input-lg">
                                                <span class="text-danger">@error('password_confirmation')
                                                    {{ $message }}
                                                @enderror</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <input type="submit" value="Register" class="btn btn-primary pull-right mb-xl" data-loading-text="Loading...">
                                        </div>
                                    </div>
                                    <br>
                                    <a href={{ route('login') }}>Already have account ? Login Here</a>
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