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

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', 'HomeController@index')->name('home');
Route::prefix('customer')->group(function (){
    Route::get('/','CustomerController@index')->name("customer.index");
Route::get('create','CustomerController@create')->name('customers.create');
Route::post('create','CustomerController@store')->name('customers.store');
Route::get('{id}/delete','CustomerController@delete')->name('customer.delete');
});
