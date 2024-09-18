@extends('layout')

@section('content')
    <h1>Crear nuevo proyecto</h1>
    @if ($errors->any())
        <ul>
            @foreach ($errors as $error)
                <li>{{$error}}</li>
            @endforeach    
        </ul>        
    @endif
    <form action="{{ route('projects.store') }}" method="POST">
        @csrf
        <label for="">Titulo <br>
            <input type="text" name="title">
        </label>
        <br>
        <label for="">URL <br>
            <input type="text" name="url">
        </label>
        <br>
        <label for="">Description <br>
            <textarea name="description"></textarea>
        </label>
        <input type="submit">
    </form>
@endsection
