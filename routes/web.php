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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/laundry','LaundryController@index');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/Laundry', 'LaundryController@indexlaundry');
Route::get('/Laundry/create', 'LaundryController@createlaundry');
Route::post('/Laundry/save', 'LaundryController@savelaundry');
Route::get('/Laundry/edit/{id}', 'LaundryController@editlaundry')->name('editLaundry');
Route::post('/Laundry/update', 'LaundryController@updatelaundry')->name('update');
Route::get('/Laundry/delete/{id}', 'LaundryController@deletelaundry')->name('deleteLaundry');

Route::get('Laundry/pdfall', 'LaundryController@pdfall')->name('pdfall');
