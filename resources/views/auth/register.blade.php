@extends('layouts.app')

@section('content')
    <main>
        <div class="center">
            <h5 class="indigo-text">Register Account</h5>

            <div class="container">
                <div class="z-depth-1 row" style="display: inline-block; padding: 16px 24px 0px 24px; border: 1px solid #EEE;">

                    <form class="col s12" method="post" action="{{ route('register') }}" id="form_register">
                        @csrf
                        <div class='row'>
                            <div class='input-field col s6'>
                                <label for="first_name">
                                    <i class="fas fa-id-card"></i> First name
                                </label>
                                <input class="validate" type="text" name="first_name" id="first_name" required>
                            </div>
                            <div class='input-field col s6'>
                                <label for="last_name">
                                    <i class="fas fa-id-card"></i> Last name
                                </label>
                                <input class="validate" type="text" name="last_name" id="last_name" required>
                            </div>
                        </div>

                        <div class='row'>
                            <div class="input-field col s6">
                                <label for="phone">
                                    <i class="fas fa-mobile-alt"></i> Phone
                                </label>
                                <input type="tel" class="validate" name="phone" id="phone" required>
                            </div>
                            <div class="input-field col s6">
                                <label for="birthdate">
                                    <i class="fas fa-calendar-alt"></i> Birthdate
                                </label>
                                <input class="datepicker" type="text" name="birthdate" id="birthdate" required>
                            </div>
                        </div>

                        <div class='row'>
                            <div class='input-field col s12'>
                                <label for='email'>
                                    <i class="fas fa-envelope"></i> Enter your email
                                </label>
                                <input class='validate' type='email' name='email' id='email' required />
                            </div>
                        </div>

                        <div class='row'>
                            <div class='input-field col s12'>
                                <label for='password'>
                                    <i class="fas fa-lock"></i> Enter your password
                                </label>
                                <input class='validate' type='password' name='password' id='password' required/>
                            </div>
                        </div>

                        <div class='row'>
                            <div class='input-field col s12'>
                                <label for='password_confirmation'>
                                    <i class="fas fa-lock"></i> Repeat password
                                </label>
                                <input class='validate' type='password' name='password_confirmation' id='password_confirmation' required/>
                            </div>
                        </div>

                        <div class="center">
                            <div class='row'>
                                <button type='submit' class='col s12 btn btn-large waves-effect indigo'>Sign Up</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="section"></div>
        <div class="section"></div>
    </main>
@endsection
