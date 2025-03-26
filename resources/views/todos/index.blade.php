@extends('layouts.app')
@section('title', 'Todos')
@section('content')
    <div class="row text-center">
        <h1 class="font-bold shadow-lg">Todo Page</h1>
    </div>

    <div class="container">
        <a href="{{route('todos.create')}}" class="btn btn-primary">Create Todo</a>
        @include('components.todo-table')
    </div>

@endsection
