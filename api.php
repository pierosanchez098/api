<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PokemonController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('/pokemons', [PokemonController::class, 'index']);
Route::get('/pokemons/{id}', [PokemonController::class, 'show']);
Route::post('/pokemons', [PokemonController::class, 'store']);
Route::put('/pokemons/{id}', [PokemonController::class, 'update']);
Route::delete('/pokemons/{id}', [PokemonController::class, 'destroy']);
