<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\HTTP\Controllers\BookController;
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

//Mostrar
Route::resource('/books', BookController::class);
// Route::get('/books', [BookController::class, 'index']);
// Route::get('/books/create', [BookController::class, 'create']);
// Route::post('/books/store', [BookController::class, 'store']);

Route::get('/', function () {
    return view('welcome');
});
