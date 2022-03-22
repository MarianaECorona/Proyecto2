<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::all();
        return view('books.indexBooks', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('books.formBooks');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request -> validate([
            'title' => 'required',
            'author'=> ['required', 'min:5'],
            'editorial'=> ['required', 'min:5'],
            'year'=> ['required', 'max:4'],
            'language'=> 'required',
        ]);

        $book = new Book();
        $book -> title = $request-> title;
        $book -> author = $request-> author;
        $book -> editorial = $request-> editorial;
        $book -> year = $request-> year;
        $book -> language = $request-> language;
        $book -> save();

        return redirect('/books');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        return view('books.showBook', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        return view('books.formBooks', compact('book'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        $request -> validate([
            'title' => 'required',
            'author'=> ['required', 'min:5'],
            'editorial'=> ['required', 'min:5'],
            'year'=> ['required', 'max:4'],
            'language'=> 'required',
        ]);

        $book -> title = $request-> title;
        $book -> author = $request-> author;
        $book -> editorial = $request-> editorial;
        $book -> year = $request-> year;
        $book -> language = $request-> language;
        $book -> save();

        return redirect('/books');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        dd('it works?');
    }
}
