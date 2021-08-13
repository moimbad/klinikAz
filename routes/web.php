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




Route::get('/', function () {
    return view('index');
});
Route::get('/um', function () {
    return view('usermanual');
});
Route::get('/umaty', function () {
    return view('umaty');
});
Route::get('/wellnesscentre', function () {
    return view('wellness');
});
Route::get('/ampac', function () {
    return view('ampac');
});

Route::get('/portfolio', function () {
    return view('portfolio');
});
Route::get('/klinik', function () {
    return view('klinik');
});
Route::get('/tentang', function () {
    return view('tentang');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('can:manage-users') ->group(function(){
    Route::resource('/users', 'UsersController', ['except' => ['show','create','store']]);




});

Route::get('/shop', 'CartController@shop')->name('wellness');
Route::get('/cart', 'CartController@cart')->name('cart.index');
Route::post('/add', 'CartController@add')->name('cart.store');
Route::post('/update', 'CartController@update')->name('cart.update');
Route::post('/remove', 'CartController@remove')->name('cart.remove');
Route::post('/clear', 'CartController@clear')->name('cart.clear');

Route::get('/checkout', 'CartController@checkout');
Route::post('/checkout2', 'CartController@checkoutPost')->name('checkout.post');

Route::post('contact','ContactFormController@store');