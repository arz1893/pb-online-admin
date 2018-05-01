@extends('layouts.app')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/login_stylesheet.css') }}">
@endpush

@section('content')
    <div class="section"></div>
    <main>
        <div class="center">
            <div class="section"></div>
            <h5 class="indigo-text">Please, login into your account</h5>
            <div class="section"></div>

            <div class="container">
                <div class="z-depth-1 row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px solid #EEE;">

                    <form class="col s12" method="post">
                        <div class='row'>
                            <div class='col s12'>
                            </div>
                        </div>

                        <div class='row'>
                            <div class='input-field col s12'>
                                <input class='validate' type='email' name='email' id='email' />
                                <label for='email'>
                                    <i class="fas fa-envelope"></i> Enter your email
                                </label>
                            </div>
                        </div>

                        <div class='row'>
                            <div class='input-field col s12'>
                                <input class='validate' type='password' name='password' id='password' />
                                <label for='password'>
                                    <i class="fas fa-lock"></i> Enter your password
                                </label>
                            </div>
                            <label style='float: right;'>
                                <a class='pink-text' href='#!'><b>Forgot Password?</b></a>
                            </label>
                        </div>

                        <br />
                        <div class="center">
                            <div class='row'>
                                <button type='button' name='btn_login' class='col s12 btn btn-large waves-effect indigo'>Login</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <a href="#!">Create account</a>
        </div>

        <div class="section"></div>
        <div class="section"></div>
    </main>
@endsection
