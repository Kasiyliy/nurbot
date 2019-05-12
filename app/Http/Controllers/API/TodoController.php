<?php

namespace App\Http\Controllers\API;

use App\Todo;
use Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class TodoController extends Controller
{
    public function index(){
        $user = Auth::user();
        $todos = Todo::where('user_id' , $user->id)->get();
        return response()->json($todos);
    }


    public function store(Request $request){
        $user = Auth::user();
        $validator = Validator::make($request->all(), [
            'name' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json(['error'=>$validator->errors()], 401);
        }
        $todo = new Todo();
        $todo->user_id = $user->id;
        $todo->name = $request->name;
        $todo->save();
        return response()->json($todo);
    }

    public function delete($id){
        $user = Auth::user();
        if (!$user) {
            return response()->json('error', 401);
        }
        $todo = Todo::findOrFail($id);
        $todo->delete();
        return response()->json('deleted' , 200);
    }
}
