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
    return view('welcome');
});

//post
Route::get('/post/index','PostController@Index');
Route::get('/post/add','PostController@Add');
Route::post('/post/add','PostController@AddProccess');
Route::delete('/post/{id}','PostController@DeleteProccess');
Route::get('/post/update/{id}','PostController@Update');
Route::put('/post','PostController@UpdateProccess');
//end post

Route::resource('product','ProductController');

//generated by laravel's default auth
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

//admin routes
Route::get('/register/admin', 'AdminController@create');
Route::get('/login/admin', 'AdminController@loginAdmin');
Route::post('/register/admin', 'AdminController@registerAdmin')->name('register.admin');
Route::post('/login/admin', 'AdminController@adminAuth')->name('login.admin');

//admin routes we want protected 
Route::group(['middleware'=>'auth:admins'], function(){
Route::get('/home/admin', 'AdminController@home');
Route::post('/logout/admin', 'AdminController@logout')->name('logout.admin');
});