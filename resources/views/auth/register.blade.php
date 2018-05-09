@extends('layouts.app')

@section('content')

    <div class="container" style="margin-top: 70px;">

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
                        <input name="" class="form-control" placeholder="Email address" type="email">
                    </div> <!-- form-group// -->
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
                        </div>
                        <select class="custom-select" style="max-width: 120px;">
                            <option value="+62" selected="">+62</option>
                            <option value="+972">+972</option>
                            <option value="+198">+198</option>
                            <option value="+701">+701</option>
                        </select>
                        <input name="" class="form-control" placeholder="Phone number" type="text">
                    </div> <!-- form-group// -->
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-calendar"></i> </span>
                        </div>
                        <input type="date" name="birthdate" id="birthdate" class="form-control">
                    </div> <!-- form-group end.// -->
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                        </div>
                        <input class="form-control" placeholder="Create password" type="password">
                    </div> <!-- form-group// -->
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                        </div>
                        <input class="form-control" placeholder="Repeat password" type="password">
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

    {{--<main>--}}
        {{--<div class="center">--}}
            {{--<h5 class="indigo-text">Register Account</h5>--}}

            {{--<div class="container">--}}
                {{--<div class="z-depth-1 row" style="display: inline-block; padding: 16px 24px 0px 24px; border: 1px solid #EEE;">--}}

                    {{--<form class="col s12" method="post" action="{{ route('register') }}" id="form_register">--}}
                        {{--@csrf--}}
                        {{--<div class='row'>--}}
                            {{--<div class='input-field col s6'>--}}
                                {{--<label for="first_name">--}}
                                    {{--<i class="fas fa-id-card"></i> First name--}}
                                {{--</label>--}}
                                {{--<input class="validate" type="text" name="first_name" id="first_name" required>--}}
                            {{--</div>--}}
                            {{--<div class='input-field col s6'>--}}
                                {{--<label for="last_name">--}}
                                    {{--<i class="fas fa-id-card"></i> Last name--}}
                                {{--</label>--}}
                                {{--<input class="validate" type="text" name="last_name" id="last_name" required>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class='row'>--}}
                            {{--<div class="input-field col s6">--}}
                                {{--<label for="phone">--}}
                                    {{--<i class="fas fa-mobile-alt"></i> Phone--}}
                                {{--</label>--}}
                                {{--<input type="tel" class="validate" name="phone" id="phone" required>--}}
                            {{--</div>--}}
                            {{--<div class="input-field col s6">--}}
                                {{--<label for="birthdate">--}}
                                    {{--<i class="fas fa-calendar-alt"></i> Birthdate--}}
                                {{--</label>--}}
                                {{--<input class="datepicker" type="text" name="birthdate" id="birthdate" required>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class='row'>--}}
                            {{--<div class='input-field col s12'>--}}
                                {{--<label for='email'>--}}
                                    {{--<i class="fas fa-envelope"></i> Enter your email--}}
                                {{--</label>--}}
                                {{--<input class='validate' type='email' name='email' id='email' required />--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class='row'>--}}
                            {{--<div class='input-field col s12'>--}}
                                {{--<label for='password'>--}}
                                    {{--<i class="fas fa-lock"></i> Enter your password--}}
                                {{--</label>--}}
                                {{--<input class='validate' type='password' name='password' id='password' required/>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class='row'>--}}
                            {{--<div class='input-field col s12'>--}}
                                {{--<label for='password_confirmation'>--}}
                                    {{--<i class="fas fa-lock"></i> Repeat password--}}
                                {{--</label>--}}
                                {{--<input class='validate' type='password' name='password_confirmation' id='password_confirmation' required/>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="center">--}}
                            {{--<div class='row'>--}}
                                {{--<button type='submit' class='col s12 btn btn-large waves-effect indigo'>Sign Up</button>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</form>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}

        {{--<div class="section"></div>--}}
        {{--<div class="section"></div>--}}
    {{--</main>--}}
@endsection
