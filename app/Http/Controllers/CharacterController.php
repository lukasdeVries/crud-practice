<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Character;
use App\Models\Country;
use Illuminate\Http\Request;

class CharacterController extends Controller
{
    public function index()
    {
        $characters = Character::all();
        return view("characters/index")->with("characters", $characters);
    }
    public function create()
    {
        $countrys = Country::all();
        $books = Book::all();
        return view("characters/create")->with([
            "countrys" => $countrys,
            "books" => $books
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            "name" => "required|max:255|",
            "description" => "required|max:2000",
            "country_id" => "required|integer"
        ]);

        $character = Character::create([
            "name" => $request->name,
            "description" => $request->description,
            "country_id" => $request->country_id
        ]);

        $character->books()->sync($request->input('boeken'));

        return redirect()->route("character.index");
    }

    public function edit($id)
    {
        $character = Character::findOrFail( $id );
        $countrys = Country::all();
        $books = Book::all();

        return view("characters.edit")->with([
            "character" => $character,
            "countrys" => $countrys,
            "books"=> $books
        ]);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            "name" => "required|max:255|",
            "description" => "required|max:2000",
            "country_id" => "required|integer"
        ]);

        $character = Character::findOrFail( $id );
        $character->name = $request->name;
        $character->description = $request->description;
        $character->country_id = $request->country_id;
        $character->save();

        return redirect()->route("character.index");
    }

    public function destroy(Character $character)
    {
        $character->delete();
        return redirect()->route("character.index");
    }
}
