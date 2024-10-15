@extends('layout')

@section('content')

<a href="{{route('projects.edit',$project)}}">Editar Registro</a>
<br>
<form action="{{route('projects.destroy', $project)}}" method="POST">
    @csrf
    @method('DELETE')
    <button>Eliminar</button>

</form>
<br>
{{$project->title}}
<br>
{{$project->description}}
@endsection