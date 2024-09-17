@extends('layout')

@section('content')
<ul>
    @foreach ($projects as $project)
        <li><a href="{{route('projects.show',$project)}}">{{$project->title}}</a></li>
    @endforeach
</ul>
@endsection