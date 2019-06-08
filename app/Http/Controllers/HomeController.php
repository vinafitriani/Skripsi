<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

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
        return view('index');
    }
}
