@extends('layout')

@section('content')
    @if (session('success'))
        {{session('success')}}
    @endif
    <a href="{{route('projects.create')}}">Crear nuevo</a>
    <ul>
        @foreach ($projects as $project)
            <li><a href="{{ route('projects.show', $project) }}">{{ $project->title }}</a></li>
        @endforeach
        {{ $projects->links() }}
    </ul>
@endsection
