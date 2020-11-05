<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PokemonController;
use App\Http\Controllers\PropertyController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return view('welcome');
});

//pokemon 路由
Route::get('pokemons',[PokemonController::class, 'index'])->name('pokemons.index');

Route::get('pokemons/create',[PokemonController::class, 'create'])->name('pokemons.create');

Route::get('pokemons/{poke_id}', [PokemonController::class, 'show'])
      ->where('poke_id','[0-9]+')->name('pokemons.show');

Route::get('pokemons/{poke_id}/edit',[PokemonController::class, 'edit'] )
      ->where('poke_id','[0-9]+')->name('pokemons.edit');


//property路由
Route::get('properties',[PropertyController::class, 'index'])->name('properties.index');

Route::get('properties/create',[PropertyController::class, 'create'])->name('properties.create');

Route::get('properties/{prop_id}',[PropertyController::class, 'show'])
    ->where('prop_id','[0-9]+')->name('properties.show');

Route::get('properties/{prop_id}/edit',[PropertyController::class, 'edit'])
    ->where('prop_id','[0-9]+')->name('properties.edit');
