@extends('layouts.front.site')

{{-- @section('cssFiles')
<link rel="stylesheet" href="{{asset('build/assets/front/assets/css/style-register.css')}}">
@endsection --}}

@section('content')

<div class="page-head">
    <div class="container">
        <div class="row">
            <div class="page-head-content">
                <h1 class="page-title">Log in / Customer </h1>
            </div>
        </div>
    </div>
</div>
<!-- End page header -->


<!-- register-area -->
<div class="register-area" style="background-color: rgb(249, 249, 249);">
    <div class="container">

        {{-- <div class="">
            <div class="box-for overflow">
                <div class="col-md-12 col-xs-12 register-blocks">
                    <h2>New account : </h2>
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" id="email">
                        </div>
                        <div class="form-group">
                            <label for="email">Phone Number </label>
                            <input type="number" class="form-control" id="number">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password">
                        </div>
                        <div class="form-group">
                            <label for="password">Confirm Password</label>
                            <input type="password" class="form-control" id="password">
                        </div>
                        <div class="col-12">
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                              <label class="form-check-label" for="invalidCheck2">
                                Agree to terms and conditions
                              </label>
                            </div>
                          </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-default">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div> --}}

        <div class="">
            <div class="box-for overflow">
                <div class="col-md-12 col-xs-12 login-blocks">
                    <h2>Login : </h2>
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <form action="{{ route('customer.login-check') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" name="email" id="email" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" name="password" id="password" required>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-default"> Log in</button>
                        </div>
                    </form>
                    <br>

                    <h2>Social login :  </h2>

                    <p>
                    <a class="login-social" href="#"><i class="fa fa-facebook"></i>&nbsp;Facebook</a>
                    <a class="login-social" href="#"><i class="fa fa-google-plus"></i>&nbsp;Gmail</a>
                    <a class="login-social" href="#"><i class="fa fa-twitter"></i>&nbsp;Twitter</a>
                    </p>
                </div>
                <span class="agreement1">Dont Have Account?<a href="{{route('customer.register')}}">Register Now!</a></span>
                <span class="agreement1"><a href="{{route('homepage')}}">Back To Home</a></span>

            </div>
        </div>

    </div>
</div>
@endsection
