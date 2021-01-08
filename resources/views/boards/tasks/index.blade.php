@extends('layouts.main')
@section('title', "Board's tasks")

@section('content')
    <h2>Tâches de <span style="color: red">{{$board->title}}</span></h2>
    <ul>
    @forelse ($board->tasks as $task)
        <li>{{ $task->title }}, status: {{ $task->state }}<br>
        <a href="{{route('tasks.show', [$board,$task])}}">Voir</a>
        <a href="{{route('tasks.edit', [$board,$task])}}">Edit</a>
        <form method='POST' action="{{route('tasks.destroy', ["board" => $board, "task" => $task])}}">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
        </li>
    @empty
        <p>Il n'y a pas encore de tâches dans ce board, <a href="{{route('tasks.create', $board)}}">créez en une</a></p>
    @endforelse
    </ul>
    <a href="{{route('tasks.create', $board)}}">Ajouter une tâche</a>
    <br>
    <a href="{{route('boards.show', $board)}}">Retour a {{$board->title}}</a>
@endsection