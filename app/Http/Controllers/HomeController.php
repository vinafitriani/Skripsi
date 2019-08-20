<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use App\User;
use App\Pict;
use App\UserModel;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function lang($locale)
    {
        App::setLocale($locale);
        session()->put('locale', $locale);
        return redirect()->back();
    }

    public function showAbout()
    {
        return view('about');
    }

    public function showCategory()
    {
        return view('category');
    }

    public function showIndex()
    {
        $recruiters = User::whereIn('category', ['fashion', 'photographer', 'makeup'])->orderBy('created_at', 'desc')->take(4)->get();
        $models = User::where('category', 'model')->orderBy('created_at', 'desc')->take(4)->get();
        
        return view('index')->with([
            'recruiters' => $recruiters,
            'models' => $models,
        ]);
    }
}
