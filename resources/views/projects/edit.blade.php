@extends('layout')

@section('content')
    <h1 class="title">Edit project</h1>
    <form method="post" action="/projects/{{$project->id}}" >

        @method('PATCH')
        @csrf

        <div class="field">
            <label for="title">Title</label>

            <div class="control">
                <input type="text" class="input" name="title" placeholder="Title" value="{{$project->title}}">
            </div>
        </div>


        <div class="field">
            <label for="description">Title</label>


            <div class="control">
                <textarea class="textarea" name="description" id="description" >{{$project->description}}</textarea>
            </div>
        </div>


        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">Update Project</button>
            </div>
        </div>
    </form>

    <form action="" method="post"></form>
    @method('DELETE')
    @csrf
    <div class="field">
        <div class="control">
            <button type="submit" class="button">Delete Project</button>
        </div>
    </div>
@endsection