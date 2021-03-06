<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/',function(){

    return view('welcome');
});

Route::middleware('auth')->group(function(){
    Route::get('/tweets','TweetController@index')->name('home');
    Route::post('/tweets','TweetController@store');
    Route::post('/profiles/{user:name}/follow','FollowsController@store');
    Route::delete('/profiles/{user:name}/unfollow','FollowsController@destroy');
    Route::get('/profiles/{user:name}/edit','ProfilesController@edit');
    Route::patch('/profiles/{user:name}','ProfilesController@update');
    Route::get('/explore',"ExploreController@index");
    Route::post('/tweets/{tweet}/like','TweetLikesController@store');
    Route::delete('/tweets/{tweet}/dislike','TweetLikesController@destroy');


});

Route::get('profiles/{user:name}',"ProfilesController@show")->name('profile');
// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
Auth::routes();
