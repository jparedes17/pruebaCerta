@extends('plantilla')

@section('contenido')

<h3 class="text-center mb-3 pt-3">Editar el monitor {{$monitorEditar->id}}</h3>
<div class="row">
    <div class="col-md-2"></div>
      <div class="col-md-5">    
      <form action="{{route('update', $monitorEditar->id)}}" method="POST">
        @method('PUT')
 @csrf

 <div class="form-group">
    <input type="text" name="nombre" id="nombre" class="form-control" value="{{$monitorEditar->nombre}}">
</div>

<div class="form-group">
    <input type="text" name="apellido" id="apellido" class="form-control" value="{{$monitorEditar->apellido}}">
</div>

<div class="form-group">
    <input type="text" name="programaAcademico" id="programaAcademico" class="form-control" value="{{$monitorEditar->programaAcademico}}">
</div>

<div class="form-group">
    <input type="number" name="semestre" id="semestre" class="form-control" value="{{$monitorEditar->semestre}}">
</div>

<div class="form-group">
    <input type="number" name="cedula" id="cedula" class="form-control" value="{{$monitorEditar->cedula}}">
</div>

<div class="form-group">
    <input type="number" name="contacto" id="contacto" class="form-control" value="{{$monitorEditar->contacto}}">
</div>
<button type="submit" class="btn btn-warning btn-block" style="">Editar monitor</button>
</form>
      </div>
</div>

@if (session('update'))
    <div class="alert alert-success mt-3">
        {{session('update')}}
    </div>
@endif




@endsection