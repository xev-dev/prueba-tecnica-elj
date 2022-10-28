<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dog;
 


class DogController extends Controller
{
    public function index()
    {
        $dogs = App\Dog::all();

        return response()->json([
            'res' => $dogs
        ],200);
    }
    public function register(Request $request)
    {
        $dog = new Dog;
 
        $dog->race = $request->race;
        $dog->age = $request->age;
        $dog->img = $request->img;
        $dog->castrated = $request->castrated;
        $dog->size = $request->size;
        $dog->color = $request->color;
 
        $dog->save();

        return response()->json([
            'msg' => 'ok'
        ],200);
    }
    
}
