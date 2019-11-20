@extends('layouts.app')

@section('content')

<br>
<h1 class="text-center">Edit To Do</h1>

<div class="row">
<div class="col-md-3"></div>
<div class="col-md-6">
    @if($errors->any())

        <div class="alert alert-danger">
            <ul class="list-group">

                @foreach($errors->all() as $error)

                    <li class="list-group-item">
                        {{ $error }}
                    </li>

                @endforeach

            </ul>
        </div>

    @endif
    <form action="/todoapp/public/update-todo" method="POST">
    @csrf
    <input type="hidden" name="todo_id" value="{{ $todo->id }}">
    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" class="form-control" id="name" name="name" value="{{ $todo->name }}">
    </div>
    <div class="form-group">
        <label for="des">Description:</label>
        <textarea name="description" id="des" cols="30" rows="5" class="form-control" >{{ $todo->description }}</textarea>
    </div>
    <div class="text-center">
    <button type="submit" class="btn btn-primary">Update</button>
    </div>
    </form>
</div>
<div class="col-md-3"></div>

</div>





@endsection