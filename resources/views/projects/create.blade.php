@extends('layout')

@section('title','Crear')

@section('content')
    <h1>Crear nuevo proyecto</h1>
    @include('partials.validation-errors')
    <form action="{{ route('projects.store') }}" method="POST">
        @include('projects._form', ['btnText' => 'Crear'])
    </form>
@endsection
