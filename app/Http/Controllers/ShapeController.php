<?php

namespace App\Http\Controllers;

use App\Shape;

class ShapeController extends Controller
{
    public function index(){
        $shapes = Shape::all();
        return response()->json($shapes);
    }

    public function setCurrent($id){


        $currentShape = Shape::findOrFail($id);

        $shapes = Shape::where('current' , 1)->get();
        foreach ($shapes as $shape){
            $shape->current = 0;
            $shape->save();
        }

        $currentShape ->current = 1;
        $currentShape ->save();
        return response()->json($currentShape );
    }

    public function getCurrent(){
        $currentShape = Shape::where('current' , 1)->first();
        return $currentShape->shape_id;
    }
}
