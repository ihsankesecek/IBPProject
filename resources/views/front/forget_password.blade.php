@extends('front.layout.app')

@section('heading', 'İhsan Hotel')

@section('main_content')
<div class="page-top">
            <div class="bg"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Forget Password</h2>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="page-content">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-4">
                        <form action="{{ route('customer_forget_password_submit') }}" method="POST">
                            @csrf
                        <div class="login-form">
                            <div class="mb-3">
                                <label for="" class="form-label">Email Address</label>
                                <input type="text" class="form-control" name="email">
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