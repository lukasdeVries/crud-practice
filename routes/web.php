<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CharacterController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\UniverseController;
use App\Models\Character;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('home');

// Route::get('/characters', function () {
//     $characters = Character::all();
//     return view('characters')->with([
//         'characters' => $characters
//     ]);
// })->name('characters');

route::resource('character', CharacterController::class);
route::resource('author', AuthorController::class);
route::resource('universe', UniverseController::class);
route::resource('book', BookController::class);
route::resource('country', CountryController::class);
