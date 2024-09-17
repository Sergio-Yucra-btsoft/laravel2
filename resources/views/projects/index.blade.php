@extends('layout')

@section('content')
    <a href="{{route('projects.create')}}">Crear nuevo</a>
    <ul>
        @foreach ($projects as $project)
            <li><a href="{{ route('projects.show', $project) }}">{{ $project->title }}</a></li>
        @endforeach
    </ul>
@endsection
