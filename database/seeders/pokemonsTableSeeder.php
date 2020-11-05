<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class pokemonsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('pokemons')->insert([
            'name'=>'噴火龍',
            'pro_num' =>1,
            'height'=>1.7,
            'weight'=>90.5,
            'growing'=>'否',
            'group'=>'關都',
            'place'=>'山脈和活火山'
        ]);
    }
}
