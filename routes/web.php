<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('locale/{locale}', function ($locale){
    Session::put('locale', $locale);
    return redirect()->back();
});

Route::get('/', function () {
    return view('index');
})->name('base');

Auth::routes();

Route::get('/about', 'HomeController@showAbout') -> name('about');
Route::get('/apply-event', 'AuthController@apply_event') -> name('apply-event');
Route::get('/category', 'HomeController@showCategory') -> name('category');
Route::get('/edit-event', 'AuthController@edit_event') -> name('edit-event');
Route::get('/events', 'AuthController@events') -> name('events');
Route::get('/home', 'HomeController@showIndex') -> name('index');
Route::get('/home-model', 'AuthController@index') -> name('index-model');
Route::get('/home-plk', 'AuthController@index') -> name('index-plk');
Route::get('/inbox', 'AuthController@showInbox') -> name('inbox');
Route::get('/post-event', 'AuthController@post_event') -> name('post-event');
Route::get('/profile-model', 'AuthController@showProfile') -> name('profile-model');
Route::get('/profile-plk', 'AuthController@showProfile') -> name('profile-plk');