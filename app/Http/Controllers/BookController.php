<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use App\Models\Universe;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index() {
        $books = Book::all();
        return view("books/index")->with("books", $books);
    }

    public function create() {
        $universes = Universe::all();
        $authors = Author::all();
        return view("books/create")->with([
            "universes" => $universes,
            "authors" => $authors
        ]);
    }

    public function store(Request $request) {
        $this->validate($request, [
            "title"=> "required",
            "universe_id"=> "required",
            "author_id" => "required",
        ]);

        $book = new Book;
        $book->title = $request->title;
        $book->universe_id = $request->universe_id;
        $book->author_id = $request->author_id;
        $book->save();

        return redirect()->route("book.index")->with("success","");
    }

    public function edit($id) {
        $book = Book::findOrFail($id);
        $universes = Universe::all();
        $authors = Author::all();

        return view("books/edit")->with([
            "book" => $book,
            "universes"=> $universes,
            "authors"=> $authors
        ]);
    }

    public function update(Request $request, $id) {
        $this->validate($request, [
            "title"=> "required",
            "universe_id"=> "required",
            "author_id"=> "required",
        ]);

        $book = Book::findOrFail($id);
        $book->title = $request->title;
        $book->universe_id = $request->universe_id;
        $book->author_id = $request->author_id;
        $book->save();

        return redirect()->route("book.index")->with("success","");
    }

    public function destroy($id) {
        $book = Book::findOrFail($id);
        $book->delete();
        return redirect()->route("book.index")->with("success","");
    }

}
