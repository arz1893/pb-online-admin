@extends('layouts.app')

@section('content')
    <div class="container" style="position: relative; top: 70px;">
        @include('layouts.errors.error_list')
        <div class="card bg-light">
            <article class="card-body mx-auto" style="max-width: 600px;">
                <h4 class="card-title mt-3 text-center">Create Account</h4>
                <p class="text-center">Get started with your free account</p>
                <p>
                    <a href="" class="btn btn-block btn-danger"> <i class="fa fa-google"></i>   Login with google</a>
                    <a href="" class="btn btn-block btn-primary"> <i class="fa fa-facebook-f"></i>   Login with facebook</a>
                </p>
                <p class="text-center">
                    <span class="bg-light">OR</span>
                </p>

                <form method="post" action="{{ route('register') }}" id="form_register">
                    @csrf
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                        </div>
                        <input name="firstname" class="form-control" placeholder="First name" type="text">
                        <input name="lastname" class="form-control" placeholder="Last name" type="text">
                    </div> <!-- form-group// -->
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                        </div>
                        <input type="email" name="email" id="email" class="form-control" placeholder="Email address">
                    </div> <!-- form-group// -->
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
                        </div>
                        <select class="custom-select" style="max-width: 120px;" name="country_code">
                            <option value="+62" selected="">+62</option>
                            <option value="+972">+972</option>
                            <option value="+198">+198</option>
                            <option value="+701">+701</option>
                        </select>
                        <input type="text" name="phone" id="phone" class="form-control" placeholder="Phone number">
                    </div> <!-- form-group// -->
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-calendar"></i> </span>
                        </div>
                        <input type="text" name="birthdate" id="birthdate" class="form-control datepicker-here" data-language='en' data-date-format="dd M yyyy" placeholder="Enter Birthdate">
                    </div> <!-- form-group end.// -->
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                        </div>
                        <input class="form-control" placeholder="Create password" type="password" name="password" id="password">
                    </div> <!-- form-group// -->
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                        </div>
                        <input class="form-control" placeholder="Repeat password" type="password" name="password_confirmation" id="password_confirmation">
                    </div> <!-- form-group// -->
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block"> Create Account  </button>
                    </div> <!-- form-group// -->
                    <p class="text-center">Have an account? <a href="">Log In</a> </p>
                </form>
            </article>
        </div> <!-- card.// -->
    </div>
    <!--container end.//-->
@endsection
