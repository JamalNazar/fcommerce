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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/icon', function () {
    return view('icons');
});

Route::get('/tables', function () {
    return view('tables');
});

Route::get('/maps', function () {
    return view('typography');
});
Route::get('/notification', function () {
    return view('notifications');
});
Route::get('/users', function () {
    return view('user');
});
Route::get('/tables', function () {
    return view('tables');
});
Route::get('/rtl', function () {
    return view('rtl');
});

Route::get('/addproductform', function () {
    return view('addproductform');
});

Route::post('/addproduct', [App\Http\Controllers\ProductController::class, 'store']);