<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LibroController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', function () {
    return view('welcome');
});

Route::controller(LibroController::class)->prefix('libro')->group(function(){
    Route::name('libros')->get('/', 'index');
    Route::post('/', 'index')->name('libros');
  });