<?php

namespace App\Http\Controllers;

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
            return view('index-plk');
        }
    }

    public function showInbox()
    {
        return view('inbox');
    }

    public function showProfile()
    {
        if (Auth::user()->category == "model"){
            return view('profile-model');
        }
        else {
            return view('profile-plk');
        }
    }

    public function apply_event()
    {
        return view('apply-event');
    }
    
    public function edit_event()
    {
        return view('edit-event');
    }

    public function events()
    {
        return view('events');
    }

    public function post_event()
    {
        return view('post-event');
    }
}
