@extends('layouts.main')

@section('title', "THE board")


@section('content')
    <h2>Bienvenu dans le board <span style="color: red">{{$board->title}}</span></h2>
    <div>
        <h3>Utilisateurs sur ce board:</h3>
        <ul>
        @foreach ($board->users as $user)
            <li>{{ $user->name }} : {{ $user->email }} 
                <form method="POST" action="{{route('boards.users.destroy', $user->pivot->id)}}">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Supprimer</button>
                </form>
            </li> 
        @endforeach
        </ul>
        <hr>
        <form method="POST" action="{{route('boards.users.store', $board)}}">
            @csrf
            <label for="user_id"></label>
            <select name="user_id" id="user_id">
                @forelse ($users as $user)
                    <option value="{{$user->id}}">{{$user->name}}: {{$user->email}}</option>
                @empty
                    <option>Tout les utilisateurs sont dans ce board</option>
                @endforelse
            </select>
            <button type="submit">Ajouter</button>
        </form>
    </div>


    <br>
    <a href="{{route('tasks.index', $board)}}">Liste des tâches</a>
    <br>
    <a href="{{route('tasks.create', $board)}}">Ajouter une tâche</a>
@endsection