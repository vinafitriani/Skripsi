<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\UserModel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
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
    protected $redirectTo = '/';

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
            'username' => ['required', 'string', 'max:15', 'unique:user'],
            'email' => ['required', 'string', 'email', 'max:30', 'unique:user'],
            'password' => ['required', 'string', 'min:8'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @return \App\User
     */
    protected function create(Request $request)
    {
        $user = new User;

        $user->fullname = $request->fullname;
        $user->username = $request->username;
        $user->password = Hash::make($request->password);
        $user->remember_token = $request->fullname;
        $user->email = $request->email;
        $user->location = $request->location;
        $user->profile_pict = $request->profile_pict;
        $user->category = $request->category;

        $user->save();

        $id = User::where('username', $request->username)->first();

        if ($request->category == 'model'){
            $userModel = new UserModel;

            $userModel->id = $id->id;
            $userModel->username = $id->username;
            $userModel->height = $request->height;
            $userModel->gender = $request->gender;

            $userModel->save();
        }

        if (!Request::is('signup-en')){
            Auth::login($user);
            return redirect()->action(
                'UserController@index_en'
            );
        }
        else{
            Auth::login($user);
            return redirect()->action(
                'UserController@index_in'
            );
        }
    }
}
