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

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('/types', ['as' => 'type.index', 'uses' => 'TypesController@index']);
Route::get('/pending', ['as' => 'pending.index', 'uses' => 'PendingsController@index']);
Route::get('/aproved', ['as' => 'aproved.index', 'uses' => 'AprovedsController@index']);
Route::get('/refund', ['as' => 'refund.index', 'uses' => 'RefundsController@index']);
Route::get('/detail', ['as' => 'detail.index', 'uses' => 'DetailsController@index']);
Route::resource('items' , 'RefundsController');
