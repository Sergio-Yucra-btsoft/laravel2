@extends('layout')

@section('content')

<a href="{{route('projects.edit',$project)}}">Editar Registro</a>
<br>
{{$project->title}}
<br>
{{$project->description}}
@endsection