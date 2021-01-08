@extends('layouts.main')
@section('title', "Board's tasks")

@section('content')
    <p>Infos de la tache {{$task->title}}.</p>
    <p>{{$task->description}}</p>
    <p>A faire pour le {{$task->due_date}}</p>
    <p>status {{$task->state}}</p>
    <div>Les utilisateurs assignés à la taches : </div>
    @foreach ($task->assignedUsers as $users)
        <p>{{$user->email}} : {{$user->name}}</p>
    @endforeach
    <!-- <div>
        <p>Commentaires:</p>
        @forelse ($comments as $comment)
        <p>{{$comment->text}}</p>
        @empty
            <p>pas de com</p>
        @endforelse
    </div> -->
@endsection