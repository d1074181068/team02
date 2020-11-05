<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\property;
class PropertyController extends Controller
{
    //
    public function index()
    {
        $properties = property::all();
        return view('properties.index',['properties' => $properties]);
    }

    public function create()
    {
        return view('properties.create');
    }

    public function edit($prop_id)
    {
        return view('properties.edit')-> with ("properites_id" , $prop_id);
    }

    public function show($num)
    {
        /*$data = [];
        if ($prop_id == 5)
        {
            $data['poke_name'] = "皮卡丘";
            $data['prop_name'] = "電";
            $data['prop_weakness'] = "地面";
            $data['prop_area'] = "游泳池";
            $data['propid'] = $prop_id;
        }
        else
        {
            $data['poke_name'] = "....";
            $data['prop_name'] = "....";
            $data['prop_weakness'] = "....";
            $data['prop_area'] = "....";
            $data['propid'] = $prop_id;

        }*/
        $t = property::find($num);
        if ($t == null)
            return "no";
        $property = $t ->toArray();
        return view('properties.show',$property);


    }
}
