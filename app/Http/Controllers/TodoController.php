<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $todos = Todo::all();
        $colors = array('#FFD95F', '#FFEFC8', '#B8D576', '#D70654', '#2F5249', '#437057', '#97B067', '#E3DE61');

        foreach ($todos as $todo) {
            $todo->color = $colors[array_rand($colors)];
        }
        return view('Todo.todo', compact('todos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //* validation
        $request->validate([
            "task" => "required|max:300|string",
        ]);

        //* creation

        Todo::create([
            "task" => $request->task
        ]);

        return back();

    }

    /**
     * Display the specified resource.
     */
    public function show(Todo $todo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Todo $todo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Todo $todo)
    {
        // dd($request->all());
          //* validation
        $request->validate([
            "updatedTask" => "required|max:300|string",
        ]);

        //* update

        
        $todo->update([
            "task" => $request->updatedTask
        ]);

        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Todo $todo)
    {
        $todo->delete();
        return back();
    }
}
