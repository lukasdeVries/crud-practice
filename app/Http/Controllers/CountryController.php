<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Universe;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    public function index()
    {
        $countries = Country::all();
        return view("countries/index")->with("countries", $countries);
    }

    public function create()
    {
        $universes = Universe::all();
        return view("countries/create")->with("universes", $universes);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            "name" => "required",
            "universe_id" => "required"
        ]);


        $country = Country::create([
            "name" => $request->name,
            "universe_id" => $request->universe_id,
        ]);

        return redirect()->route("country.index");
    }

    public function edit($id)
    {
        $universes = Universe::all();
        $country = Country::findOrFail($id);
        return view("countries/edit")->with([
            'universes' => $universes,
            'country' => $country
        ]);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'universe_id' => 'required'
        ]);

        $country = Country::findOrFail($id);
        $country->name = $request->name;
        $country->universe_id = $request->universe_id;
        $country->save();

        return redirect()->route('country.index');
    }

    public function destroy($id) {
        $universe = Universe::findOrFail($id);

        $universe->delete();

        return redirect()->route('country.index');
    }
}
