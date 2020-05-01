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

Route::get('/', 'GlobalController@index');
Route::get('/home', 'GlobalController@index');
Route::get('/tentang', 'GlobalController@tentang');
Route::get('/staff', 'GlobalController@staff');
Route::get('/staff/detail', 'GlobalController@staff_detail');
Route::get('/kontak', 'GlobalController@kontak');
Route::get('/gallery', 'GlobalController@gallery');

Auth::routes();

Route::get('/dasboard', function ()
{
    return "halaman admin";
})->name('dasboard');
