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

Route::get('/products', 'ProductController@index');

Route::get('/products/create-step1', 'ProductController@createStep1');
Route::post('/products/create-step1', 'ProductController@postCreateStep1');

Route::get('/products/create-step2', 'ProductController@createStep2');
Route::post('/products/create-step2', 'ProductController@postCreateStep2');
Route::post('/products/remove-image', 'ProductController@removeImage');

Route::get('/products/create-step3', 'ProductController@createStep3');
Route::post('/products/store', 'ProductController@store');