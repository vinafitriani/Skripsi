<?php

namespace App\Http\Controllers;

use App\User;
use App\PictModel;
use App\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        if (Auth::user()->category == "model"){
            return view('index-model');
        }
        else {
            $userList = User::where('category', 'model')->pluck('id'); 
            /*$picture = PictModel::whereIn('user_id', $userList)->get();*/

            return view('index-plk')->with([
                'users' => User::where('category', 'model')->get(),
                'picts' => PictModel::where('category'),
            ]);
        }
    }

    public function showInbox()
    {
        return view('inbox');
    }

    /*public function showProfile()
    {
        if (Auth::user()->category == "model"){
            return view('profile-model');
        }
        else {
            return view('profile-plk');
        }
    }*/

    public function profile_model(User $user)
    {
        $userModel = UserModel::where('username', $user->username)->first();
        $pict = PictModel::find($user->id);
        return view('profile-model')->with([
            'user' => $user,
            'usermodel' =>$userModel,
            'pict' => $pict,
        ]);
    }

    public function profile_plk($id)
    {
            $user = User::find($id);
            // $picts = PictModel::all();           
            return view('profile-plk')->with([
                'user' => $user,
                // 'picts' => $picts,
            ]);
    }

    public function apply_event()
    {
        return view('apply-event');
    }
    
    public function edit_event()
    {
        return view('edit-event');
    }

    public function events($id)
    {
        $user = User::find($id);
        return view('events')->with([
            'user' => $user,
        ]);
    }

    public function post_event()
    {
        return view('post-event');
    }

    public function searching_model(Request $request)
    {
        $user = UserModel::where('gender', $request->gender)
            ->where('height',$request->height);
        
    }
}
