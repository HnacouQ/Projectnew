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



Auth::routes();

//-------------Cart-------------
Route::group(['prefix'=>'cart'],function(){
	Route::get('/','CartController@index')->name('cart');
	Route::get('add/{id}/{quantity?}','CartController@add')->name('cart.add');
	Route::get('remove/{id}','CartController@remove')->name('cart.remove');
	Route::get('update/{id}/{quantity?}','CartController@update')->name('cart.update');
	Route::get('clear','CartController@clear')->name('cart.clear');
});

Route::get('/', 'HomeController@index')->name('home');
// Route::get('/home', 'HomeController@home');
Route::get('/home_regis', 'HomeController@home_regis')->name('home_regis');
Route::get('/home_logout', 'HomeController@home_logout')->name('home_logout');

Route::post('/home_regis', 'HomeController@post_regis')->name('post_regis');
Route::post('/home_login', 'HomeController@post_login')->name('post_login');






Route::group(['prefix' => 'admin','namespace' => 'admin','middleware'=> 'auth'], function () {
    Route::get('/','AdminController@index'); 

    Route::get('/search_ban','BannerController@search')->name('search_ban');
    
    Route::resource('category', 'CategoryController');
    Route::resource('product', 'ProductController');
    Route::resource('color', 'ColorController');
    Route::resource('size', 'SizeController');
    Route::resource('banner', 'BannerController');
});
//----------------test_middleware-----------------------
Route::group(['prefix' => 'customer','middleware' => 'cus'], function () {
    Route::get('/','TestCusController@test');
    
});

Route::get('/logout', 'admin\AdminController@logout')->name('logout');
Route::get('/test', 'admin\AdminController@test');


Route::get('test_demo','TestController@index')->name('testdemo');
Route::get('delete/{id}','TestController@delete')->name('delete');
Route::get('edit/{id}','TestController@edit')->name('edit');
Route::post('post','TestController@post_add')->name('post');
Route::post('update/{id}','TestController@update')->name('update');
