<?php

use App\Http\Controllers\SoalController;
use GuzzleHttp\Promise\Create;
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

Route::get('/Soal', 'App\Http\Controllers\SoalController@index');

Route::get('/Soal/create', 'App\Http\Controllers\SoalController@create')->name('Soal.create');

Route::post('/Soal/store', 'App\Http\Controllers\SoalController@store')->name('Soal.store');

Route::delete('delete-soal/{id}', [App\Http\Controllers\SoalController::class, 'destroy'])->name('delete.soal');
