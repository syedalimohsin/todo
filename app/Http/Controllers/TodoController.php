<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    //
    public function index(){
        $todos = Todo::all();
        return view('todo.index')->with(['todos' => $todos]);
    }

    public function create(){
        return view('todo.create');
    }

    public function upload(Request $request){
        $request->validate([
            'title' => 'required|max:255'
        ]);
        $todo = $request->title;
        Todo::create(['title' => $todo]);
        return redirect()->back()->with('success', "TODO created successfully!");
    }

    public function edit(){
        return 'hii';
    }
}
