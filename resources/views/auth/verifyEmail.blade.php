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
                                @if (session('verified'))
                                    <h4 class="heading-success text-uppercase mb-md">Email Verified</h4>
                                    <p>Your email address has been successfully verified!</p>
                                    <a href="{{ route('profile') }}" class="btn btn-primary">{{ __('Go to Profile') }}</a>
                                @else
                                    @if (session('resent'))
                                        <div class="alert alert-info" role="alert">
                                            {{ __('A verification email has been resent to ') . Auth::user()->email . ('.') }}
                                        </div>
                                    @endif
                                    <h4 class="heading-primary text-uppercase mb-md">Email Verification</h4>
                                    <p>
                                        {{ __('Please verify your email address by clicking the link in the email we sent to ') . Auth::user()->email . (' !')}}
                                        <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                                            @csrf
                                            <button type="submit" style="color: #0066CC; background: none; border: none; padding: 0; font: inherit; cursor: pointer; text-decoration: underline;">(Not your email?)</button>
                                        </form>
                                    </p>
                                    <form method="POST" action="{{ route('verification.resend') }}">
                                        @csrf
                                        <button type="submit" class="btn btn-primary">{{ __('Resend Verification Email') }}</button>
                                    </form>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
