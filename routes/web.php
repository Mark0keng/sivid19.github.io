<?php

use App\Http\Controllers\PagesController;

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

Route::get('/', 'App\Http\Controllers\PagesController@homeTest');
<<<<<<< HEAD

Route::get('/dashboard', 'App\Http\Controllers\PagesController@dashboard');
=======
Route::get('/login', 'App\Http\Controllers\PagesController@login');
Route::get('/signup', 'App\Http\Controllers\PagesController@signup');
Route::get('/berita', 'App\Http\Controllers\PagesController@berita');
>>>>>>> 19c72396924dac01bf45dc12d8945b81668ec616
