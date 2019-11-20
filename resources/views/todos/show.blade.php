@extends('layouts.app')

@section('content')

    <br>
    <h1 class="text-center">{{ $todo->name }}</h1>
    <br>
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">{{ $todo->description }}</div>
        <div class="col-md-3"></div>
    </div>
    <br><br>
    <div class="text-center">
        <a href="../todos/{{ $todo->id }}/edit" class="btn btn-info">Edit</a>
        <a href="../todos/{{ $todo->id }}/delete" class="btn btn-danger">Done</a>
    </div>

@endsection
