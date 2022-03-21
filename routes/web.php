<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

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
Route::get('/books', function () {
    $books = DB::table('books')->get();
   //dd($books);
    return view('books.indexBooks', compact('books'));
});

Route::get('/books/create', function () {
    return view('books.formBooks');
});

Route::get('/', function () {
    return view('welcome');
});
