@extends('layouts.main')

@section('title', "Add a task for an user")


@section('content')
    <h2>Ajouter une task</h2>
    <form action="/tasks" method="POST">
        @csrf
        <label for="title">Title</label>
        <input type="text" name='title' id ='title' class="@error('title') is-invalid @enderror" required><br>
        @error('title')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <label for="description">Description</label>
        <input type="text" name='description' id ='description' class="@error('description') is-invalid @enderror"><br>
        <label for="due_date"></label>
        <input type="date" name="due_date" id="due_date">
        <select name="" id="">
            <option value=""></option>
        </select>
        <button type="submit">Save</button>
    </form>
    
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
@endsection