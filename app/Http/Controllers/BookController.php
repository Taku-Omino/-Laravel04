<?php

namespace App\Http\Controllers;
use App\Models\Book;

use Illuminate\Http\Request;
use App\Models\Author;
use App\Models\User;


class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::with(['user'])->get();
        return view('front.page.book.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $authors = User::select('id', 'name')->pluck("name", "id");
        return view('front.page.book.create', compact('authors'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*$book = new Book($request->all());
        $book->save();*/
        $book = new Book($request->all());
        $book->author = 'default value';
        $book->save();

        return redirect()->route('books.index');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $book = Book::find($id);
        return view('front.page.book.show', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $book = Book::findOrFail($id);
        $authors = User::select('id', 'name')->pluck("name", "id");
        return view('front.page.book.edit', compact('book', 'authors'));
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        $authors = User::select('id', 'name')->pluck("name", "id");
        $book->update($request->all());
        return view('front.page.book.show', compact('book', 'authors'));
}



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Book::destroy($id);
        return redirect()->route('books.index');
    }

}
