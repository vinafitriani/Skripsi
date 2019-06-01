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

Route::get('/', function () {
    return view('english.index-en');
});

Auth::routes();

Route::get('/about-en', 'UserController@about_en') -> name('about-en');
Route::get('/apply-event-en', 'UserController@apply_event_en') -> name('apply-event-en');
Route::get('/category-en', 'UserController@category_en') -> name('category-en');
Route::get('/edit-event-en', 'UserController@edit_event_en') -> name('edit-event-en');
Route::get('/events-en', 'UserController@events_en') -> name('events-en');
Route::get('/inbox-en', 'UserController@inbox_en') -> name('inbox-en');
Route::get('/index-en', 'UserController@index_en') -> name('index-en');
Route::get('/index-model-en', 'UserController@index_model_en') -> name('index-model-en');
Route::get('/index-plk-en', 'UserController@index_plk_en') -> name('index-plk-en');
Route::get('/post-event-en', 'UserController@post_event_en') -> name('post-event-en');
Route::get('/profile-model-en', 'UserController@profile_model_en') -> name('profile-model-en');
Route::get('/profile-plk-en', 'UserController@profile_plk_en') -> name('profile-plk-en');
Route::get('/signin-en', 'UserController@signin_en') -> name('signin-en');
Route::get('/signup-en', 'UserController@create_en') -> name('signup-en');
Route::get('/tes', 'UserController@test') -> name('tes');


Route::get('/about-in', 'UserController@about_in') -> name('about-in');
Route::get('/apply-event-in', 'UserController@apply_event_in') -> name('apply-event-in');
Route::get('/category-in', 'UserController@category_in') -> name('category-in');
Route::get('/edit-event-in', 'UserController@edit_event_in') -> name('edit-event-in');
Route::get('/events-in', 'UserController@events_in') -> name('events-in');
Route::get('/inbox-in', 'UserController@inbox_in') -> name('inbox-in');
Route::get('/index-in', 'UserController@index_in') -> name('index-in');
Route::get('/index-model-in', 'UserController@index_model_in') -> name('index-model-in');
Route::get('/index-plk-in', 'UserController@index_plk_in') -> name('index-plk-in');
Route::get('/post-event-in', 'UserController@post_event_in') -> name('post-event-in');
Route::get('/profile-model-in', 'UserController@profile_model_in') -> name('profile-model-in');
Route::get('/profile-plk-in', 'UserController@profile_plk_in') -> name('profile-plk-in');
Route::get('/signin-in', 'UserController@signin_in') -> name('signin-in');
Route::get('/signup-in', 'UserController@create_in') -> name('signup-in');

Route::post('/registered', 'RegisterController@create')->name('reg_user');