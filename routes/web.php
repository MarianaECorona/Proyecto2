<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\HTTP\Controllers\BooksController;
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
Route::get('/books', [BooksController::class, 'index']);

Route::get('/books/create', [BooksController::class, 'create']);

Route::post('/books/store', [BooksController::class, 'store']);

Route::get('/', function () {
    return view('welcome');
});
