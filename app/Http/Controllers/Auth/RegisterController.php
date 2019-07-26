<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\UserModel;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
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
    public function redirectTo() {
        $role = Auth::user()->category;

        if ($role == "model") {
            return '/home-model';
        }
        else {
            return '/home-plk';
        }
   }

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
            'fullname' => ['required', 'string', 'max:30'],
            'username' => ['required', 'string', 'max:15', 'unique:users'],
            'email' => ['required', 'string', 'email', 'max:30', 'unique:users'],
            'password' => ['required', 'string', 'max:8'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        // dd($data);

        $user = User::create([
            'fullname' => $data['fullname'],
            'username' => $data['username'],
            'password' => Hash::make($data['password']),
            'email' => $data['email'],
            'location' => $data['location'],
            'category' => $data['category'],
        ]);

        $id = User::where('username', $data['username'])->first();

        if ($id->category == 'model'){
            $usermodel = UserModel::create([
                'username' => $id->username,
                'gender' => $data['gender'],
                'height' => $data['height'],
            ]);
        }

        return $user;
    }
}
