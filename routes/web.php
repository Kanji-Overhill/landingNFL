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
Route::post('/insert-asesor','App\Http\Controllers\RegistrosController@insertRegistroAsesor')->name('insertAsesor');
Route::post('/insert-cliente','App\Http\Controllers\RegistrosController@insertRegistroCliente')->name('insertCliente');
Route::get('/imprimir/{folios}', 'App\Http\Controllers\GeneradorController@imprimir')->name('print');