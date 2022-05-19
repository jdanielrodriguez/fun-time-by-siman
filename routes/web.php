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
    return view('home');
});

Route::get('/registro', function () {
    return view('registro');
});

Route::get('/gallery/list', [App\Http\Controllers\GalleryController::class, 'index']);
Route::post('/gallery/add', [App\Http\Controllers\GalleryController::class, 'store']);


