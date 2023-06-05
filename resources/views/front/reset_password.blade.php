@extends('front.layout.app')

@section('heading', 'İhsan Hotel')

@section('main_content')
<div class="page-top">
            <div class="bg"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Reset Password</h2>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="page-content">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-4">
                        <form action="{{ route('customer_reset_password_submit') }}" method="POST">
                            @csrf
                        <div class="login-form">
                            <div class="mb-3">
                                <input type="hidden" name="token" value="{{ $token }}">
                                <input type="hidden" name="email" value="{{ $email }}">
                                <label for="" class="form-label">Password</label>
                                <input type="password" class="form-control" name="password">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Retype Password</label>
                                <input type="password" class="form-control" name="retype_password">
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary bg-website">Submit</button>
                                <a href="{{ route('customer_login') }}" class="primary-color">Back to Login Page</a>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection