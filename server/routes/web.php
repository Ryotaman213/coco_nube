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

Route::resource('/', 'HomeController')->only([
  'index'
]);

Route::resource('/menu', 'MenuController')->only([
  'index'
]);

Route::resource('/staff', 'StaffController')->only([
  'index'
]);

Route::resource('/reserve', 'ReserveController')->only([
  'index'
]);
