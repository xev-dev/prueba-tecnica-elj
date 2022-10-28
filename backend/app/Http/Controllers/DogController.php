<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use App\Dog;
 


class DogController extends Controller
{
    public function index()
    {
        $dogs = Dog::all();

        foreach ($dogs as $dog){
            $file = Storage::disk('public')->get($dog->img);
            $mimetype = explode(".", $dog->img)[1];
            $dog->img = 'data:image/' . $mimetype . ';base64,' . base64_encode($file);
        }

        return response()->json([
            'res' => $dogs
        ],200);
    }
    public function register(Request $request)
    {
        $image_64 = $request->img;

        $extension = explode('/', explode(':', substr($image_64, 0, strpos($image_64, ';')))[1])[1];  
      
        $replace = substr($image_64, 0, strpos($image_64, ',')+1); 
      
        $image = str_replace($replace, '', $image_64); 
        
        $image = str_replace(' ', '+', $image); 
        
        $imageName = Str::random(10).'.'.$extension;
        
        Storage::disk('public')->put($imageName, base64_decode($image));


        $dog = new Dog;
        
        $dog->race = $request->race;
        $dog->age = $request->age;
        $dog->castrated = $request->castrated;
        $dog->size = $request->size;
        $dog->color = $request->color;
        $dog->img = $imageName;

        $dog->save();

        return response()->json([
            'msg' => 'ok'
        ],200);
    }  
}
