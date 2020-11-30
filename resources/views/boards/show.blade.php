@extends('layouts.main')

@section('title', "User's board {{$board->title}}")


@section('content')
    <h2>{{$board->title}}<h2>
    <p>{{$board->description}}</p>
    <div class="participants">
        @foreach($Sponsor->sponsors as $sponsor) 
            <div class="card-body">
                <img class="w-20 h-20">{{$sponsor->photo}}</img>
            </div>
        @endforeach
    </div>

@endsection