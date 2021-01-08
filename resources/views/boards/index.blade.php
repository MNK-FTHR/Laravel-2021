@extends('layouts.main')

@section('title', "User's boards")


@section('content')
    <p>Boards de {{$user->name}} :</p>
    @forelse ($user->boards as $board)
        <p>Le board {{ $board->title }} : 
                @can('view', $board)
                <a href="{{route('boards.show', $board)}}">Voir</a>
                @endcan
                @can('update', $board)
                <a href="{{route('boards.edit', $board)}}">Edit</a>
                @endcan
                @can('delete', $board)
                <form method='POST' action="{{route('boards.destroy', $board)}}">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
                @endcan
            </p>
    @empty
        <a href="{{route('boards.create')}}">Créer un board</a>
    @endforelse
@endsection