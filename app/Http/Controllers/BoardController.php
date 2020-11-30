<?php

namespace App\Http\Controllers;

use App\Models\Board;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BoardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // On récupérer tous les boards auxquels participe l'utilisateur connecté 
        $user = Auth::user();
        return view('boards.index', ['boards' =>  $user->boards]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // renvoi le formulaire de création d'un board
        return view('boards.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'description' => 'max:4096',
        ]);
        $board = new Board(); 
        $board->user_id = Auth::user()->id; 
        $board->title = $validatedData['title']; 
        $board->description = $validatedData['description']; 
        $board->save();
        return redirect()->route('boards.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Board  $board
     * @return \Illuminate\Http\Response
     */
    public function show(Board $board)
    {
        //
        return view("boards.show", ["board" => $board]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Board  $board
     * @return \Illuminate\Http\Response
     */
    public function edit(Board $board)
    {
        //
        return view('boards.edit', ['board' => $board]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Board  $board
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Board $board)
    {
        //
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'description' => 'max:4096',
        ]);
        $board->title = $validatedData['title']; 
        $board->description = $validatedData['description']; 
        $board->update();

        return redirect()->route('boards.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Board  $board
     * @return \Illuminate\Http\Response
     */
    public function destroy(Board $board)
    {
        //
        $board->delete(); 
        return redirect()->route('boards.index');
    }
}
