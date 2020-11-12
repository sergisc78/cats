<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Auth::routes();




// ADMIN ROUTES

Route::get('/admin','AdminController@index');

Route::get('/admin/addAdult','AdminController@addCat');

Route::post('/admin/addAdult/prova','AdminController@store')->name('store');

Route::get('/admin/ConsultAdultCats','AdminController@showCats');

Route::get('/admin/{id}','AdminController@show');



// USER ROUTES

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/users/adultCats','UserController@showAdultCats');

Route::get('/users/{id}','UserController@show');


