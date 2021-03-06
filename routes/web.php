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

Route::get('/instrucciones', function () {
    return view('info');
});

Route::get('/registro', function () {
    return view('registro');
});

Route::get('/galeria', function () {
    return view('galeria');
});


/**** Registro */
Route::post('/galeria/registro', [App\Http\Controllers\GalleryController::class, 'store']);
/**** Galeria */
Route::get('/gallery/list', [App\Http\Controllers\GalleryController::class, 'index']);
/**** Video */
Route::get('/gallery/video', [App\Http\Controllers\GalleryController::class, 'video']);
/**** Validar DPI */
Route::put('/gallery/validar', [App\Http\Controllers\GalleryController::class, 'validar']);
Route::post('/gallery/validar-grupo', [App\Http\Controllers\GalleryController::class, 'validarGrupo']);
Route::get('/gallery/cantidad-grupo', [App\Http\Controllers\GalleryController::class, 'cantidadGrupo']);
