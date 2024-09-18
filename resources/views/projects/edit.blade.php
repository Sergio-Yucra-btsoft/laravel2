@extends('layout')

@section('content')
    <h1>Editar proyecto</h1>
    @if ($errors->any())
        <ul>
            @foreach ($errors as $error)
                <li>{{$error}}</li>
            @endforeach    
        </ul>        
    @endif
    <form action="{{ route('projects.update',$project) }}" method="POST">
        @csrf
        @method('patch')
        <label for="">Titulo <br>
            <input type="text" name="title" value="{{$project->title}}">
        </label>
        <br>
        <label for="">URL <br>
            <input type="text" name="url" value="{{$project->url}}">
        </label>
        <br>
        <label for="">Description <br>
            <textarea name="description">{{$project->description}}</textarea>
        </label>
        <input type="submit">
    </form>
@endsection
