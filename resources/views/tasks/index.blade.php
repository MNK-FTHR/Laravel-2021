@extends('layouts.main')

@section('title', "User's tasks")


@section('content')
    <p>Ici on va afficher les tasks que l'utilisateur {{$user->name}} a dans sa liste.</p>
    <div>Les boards de l'utilisateur</div>
    @foreach ($user->tasks as $task)
        <p>Le board {{ $task->title }} : 
                <a href="{{route('task.show', $task)}}">Voir</a>
                <a href="{{route('task.edit', $task)}}">Edit</a>
                <form method='POST' action="{{route('task.destroy', $task)}}">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </p>
    @endforeach
@endsection