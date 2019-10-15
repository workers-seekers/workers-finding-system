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

//count candidate and show in home page 
Route::get('/', 'FrontController@countcandidate');

//search candidate value pass from home
Route::post('searchcandidate','FrontController@searchcandidate');

Route::get('showsearchcandidate','FrontController@searchcandidate');

Route::get('/about', function () {
    return view('about');
});

Route::get('/changepassword', function () {
    return view('changepassword');
});

//show admin panel
Route::get('/adminpenal', 'FrontController@allusershowadmin');

//make admin
Route::get('/makeadmin{id}','FrontController@makeadmin');

//make user
Route::get('/makeuser{id}','FrontController@makeuser');

//block user
Route::get('/blockuser{id}','FrontController@blockuser');

//Unblock user
Route::get('/unblockuser{id}','FrontController@unblockuser');




//show all candidate
Route::get('/candidate', 'FrontController@allcandidate');

//show profile
Route::get('/profile', 'FrontController@showprofile');

//edit profile
Route::get('/editprofile','FrontController@editprofileshow');

//update profile data pass controller
Route::post('editprodatasave','FrontController@updateprofile');

//profile photo upload
Route::post('/uploadfile','FrontController@profileimageupload');

Route::get('/contact', function () {
    return view('contact');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
