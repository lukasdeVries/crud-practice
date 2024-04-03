<?php

namespace App\Http\Controllers;

use App\Models\Universe;
use Illuminate\Http\Request;

class UniverseController extends Controller
{
    public function index() {
        $universe = Universe::all();
        return view("universes/index")->with("universes", $universe);
    }

    public function create() {
        return view("universes/create");
    }

    public function store(Request $request) {
        $this->validate($request, [
            "name"=> "required",
        ]);

        $universe = new Universe;
        $universe->name = $request->name;
        $universe->save();

        return redirect()->route("universe.index")->with("success","");
    }
}
