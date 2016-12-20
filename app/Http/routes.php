<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin',function (){

    return view('admin.index');
});


//Route::get('/admin/adminLogin',function (){
//   return view('admin.adminLogin.index');
//});
//
//
//Route::get('/admin/adminSignup',function () {
//    return view('admin.adminLogin.signup');
//
//
//
//
//});


//Route::resource('admin/','AdminLoginController');
Route::resource('admin/adminLogin','AdminSignUpController');
Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('/blog','BlogController@blog');
Route::get('/aboutus','BlogController@about');
Route::get('/portfolio','BlogController@portfolio');
Route::get('/contact','BlogController@contact');

Route::get('/service','BlogController@service');
Route::get('/pages','BlogController@pages');
Route::get('/bloghome','BlogController@bloghome');
Route::get('/bloglogin','BlogController@bloglogin');
Route::get('/blogabout','BlogController@blogabout');
Route::get('/blogregister','BlogController@blogregister');