<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Renvoi une vue à laquelle on transmet les tasks de l'utilisateurs (ceux auxquels il participe)
        $user = Auth::user();
        return view('tasks.index', ['user' => $user]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('tasks.create');
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * Permet de stocker une nouvelle task pour l'utilisateur dans la base de données
     * 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $validatedData = $request->validate([
            'title' => 'required|string|max:255', 
            'description' => 'max:4096',
            'due_date' => ''
        ]);
        $task = new Task(); 
        $task->title = $validatedData['title'];
        $task->description = $validatedData['description'];
        $task->due_date = $validatedData['due_date'];
        $task->user_id = Auth::user()->id; 

        $task->save(); 
        return redirect('/tasks');
        
    }
    
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function show(Task $task)
    {
        return view('tasks.show', ['task' => $task]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function edit(Task $task)
    {
        //
        return view('tasks.edit', ['task' => $task]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Task $task)
    {
        //
        $validatedData = $request->validate([
                'title' => 'required|string|max:255', 
                'description' => 'max:4096',
                'due_date' => ''
            ]
        );
        $board->title = $validatedData['title'];
        $board->description = $validatedData['description'];
        $board->due_date = $validatedData['due_date'];
        $board->update(); 

        return redirect('/tasks');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Board  $task
     * @return \Illuminate\Http\Response
     */
    public function destroy(Task $task)
    {
        //
        $board->delete();
        return redirect('/tasks');
    }
}
