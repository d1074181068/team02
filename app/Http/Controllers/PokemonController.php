<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pokemon;

class PokemonController extends Controller
{
    //
    public function index()
    {
         $pokemons = pokemon::all();
        return view('pokemons.index',['pokemons' => $pokemons]);
    }

    public function create()
    {

        return view('pokemons.create');
    }

    public function edit($poke_id)
    {
        return view('pokemons.edit')-> with ("pokemons_id" , $poke_id);;
    }

    public function show($num_ID)
    {
        $temp = pokemon::find($num_ID);
        if ($temp == null)
            return "no";
        $pokemon = $temp ->toArray();
        return view('pokemons.show',$pokemon);
        /*$data = [];
        if ($poke_id == 5)
        {
            $data['poke_name'] = "皮卡丘";
            $data['poke_color'] = "黃色";
            $data['poke_skill'] = "十萬伏特";
            $data['pokeid'] = $poke_id;
        }
        else
        {
            $data['poke_name'] = "....";
            $data['poke_color'] = "....";
            $data['poke_skill'] = "....";
            $data['pokeid'] = $poke_id;
        }*/



    }

}
