<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    //
    public function index(){
        $todos = Todo::orderBy('completed')->get();
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

    public function edit($id){
        $todo = Todo::find($id);
        return view('todo.edit')->with(['id' => $id, 'todo' => $todo]);
    }

    public function update(Request $request){
        $request->validate([
            'title' => 'required|max:255'
        ]);
        $updatetodo = Todo::find($request->id);
        $updatetodo->update(['title' => $request->title]);
        return redirect('/index')->with('success', "TODO created successfully!");
    }

    public function completed($id){
        $todo = Todo::find($id);
        if ($todo->completed){
            $todo->update(['completed' => false]);
            return redirect()->back()->with('success', "TODO marked as incomplete!");
        }else{
            $todo->update(['completed' => true]);
            return redirect()->back()->with('success', "TODO marked as complete!");
        }
    }

    public function delete($id){

        $todo = Todo::find($id)->delete();
        // $deletetodo->delete(['title' => $request->title]);
        return redirect('/index')->with('success', "TODO has deleted successfully!");

    }

    
}
