<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index() {
        $authors = Author::all();
        return view("authors/index")->with("authors", $authors);
    }

    public function create() {
        return view("authors/create");
    }

    public function store(Request $request) {
        $this->validate($request, [
            "name"=> "required",
            "date_of_birth" => 'required',
            'nationality' => 'required',
        ]);


        $author = new Author();
        $author->name = $request->name;
        $author->date_of_birth = $request->date_of_birth;
        $author->nationality = $request->nationality;
        $author->is_alive = $request->is_alive;
        $author->date_of_death = $request->date_of_death;
        $author->save();

        return redirect()->route('author.index')->with('success','');

    }

    public function edit ($id) {
        $author = Author::findOrFail($id);
        
        return view('authors/edit')->with('author', $author);
    }

    public function update (Request $request, $id) {
        $this->validate($request, [
            'name'=> 'required',
            'nationality'=> 'required',
            'date_of_birth'=> 'required',
        ]);

        $author = Author::findOrFail( $id );
        $author->name = $request->name;
        $author->date_of_birth = $request->date_of_birth;
        $author->nationality = $request->nationality;
        $author->is_alive = $request->is_alive;
        $author->date_of_death = $request->date_of_death;
        $author->save();

        return redirect()->route('author.index')->with('success','Autheur succesvol opgeslagen');
    }
}
