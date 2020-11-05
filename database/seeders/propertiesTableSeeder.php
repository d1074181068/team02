<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class propertiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('properties')->insert([
                   'property'=>'水',
                   'characteristic' =>'潮濕',
                   'home'=>'水環境',
                   'weakness'=>'草'

               ]);
    }
}
