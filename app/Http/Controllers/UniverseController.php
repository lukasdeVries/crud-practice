<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UniverseController extends Controller
{
    public function index() {
        return view("universe");
    }
}
