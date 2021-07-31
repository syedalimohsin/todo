<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    //
    public function index(){
        return 'hii';
    }

    public function create(){
        return view('todo.create');
    }

    public function upload(Request $request){
        $todo = $request->title;
        Todo::create(['title' => $todo]);
    }

    public function edit(){
        return 'hii';
    }
}
