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
    return view('public/welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home/add', 'HomeController@add')->name('add');
Route::get('/home/remove', 'HomeController@remove')->name('remove');

Route::resource('foods','FoodsController');
Route::get('/home/add/manuallyAdd', 'FoodsController@manuallyAdd')->name('manuallyAdd');

//DELETE FOOD
Route::get('/home/remove', 'HomeController@remove')->name('remove');
Route::get('/home/remove/manuallyDelete', 'FoodsController@manuallyDelete')->name('manuallyDelete'); //add?
Route::get('/home/remove/manuallyDelete/deleteFish', 'FoodsController@deleteFish')->name('deleteFish');
Route::get('/home/remove/manuallyDelete/deleteMilk', 'FoodsController@deleteMilk')->name('deleteMilk');
Route::get('/home/remove/manuallyDelete/deleteVeg', 'FoodsController@deleteVeg')->name('deleteVeg');
Route::get('/home/remove/manuallyDelete/deleteBread', 'FoodsController@deleteBread')->name('deleteBread');



//Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
