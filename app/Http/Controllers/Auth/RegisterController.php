<?php

namespace App\Http\Controllers\Auth;

use App\Models\Auth\Contact;
use App\Models\Auth\UserCredential;
use App\User;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:usercredential,username',
            'password' => 'required|string|min:6|confirmed',
            'birthdate' => 'required',
            'phone' => 'required'
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\Auth\UserCredential
     */
    protected function create(array $data)
    {
        $userCredential = UserCredential::create([
            'username' => $data['email'],
            'password' => Hash::make($data['password']),
            'group_id' => 2,
            'isenable' => true,
            'sys_created' => Carbon::now()
        ]);

        Contact::create([
            'usercred_id' => $userCredential->systemid,
            'firstname' => $data['firstname'],
            'lastname' => $data['lastname'],
            'email' => $data['email'],
            'phone' => $data['country_code'] . $data['phone'],
            'birthdate' => date('Y-m-d', strtotime($data['birthdate']))
        ]);

        return $userCredential;
    }
}
