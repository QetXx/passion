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

Route::get('/', 'indexcontroller@store');

Route::get('/about', 'indexcontroller@isoka'); 

Route::get('/testimonial', 'indexcontroller@gon');

Route::get('/product', 'indexcontroller@aomine');

Route::get('/contact', 'indexcontroller@giraya');

Route::get('/blog_list', 'indexcontroller@boubou');