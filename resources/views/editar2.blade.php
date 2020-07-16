@extends('plantilla')

@section('contenido')

<h3 class="text-center mb-3 pt-3">Editar el monitor {{$monitoriaEditar->id}}</h3>
<div class="row">
    <div class="col-md-2"></div>
      <div class="col-md-5">    
      <form action="{{route('update2', $monitoriaEditar->id)}}" method="POST">
        @method('PUT')
 @csrf

 <div class="form-group">
    <input type="text" name="materia" id="materia" class="form-control" value="{{$monitoriaEditar->materia}}">
</div>

<div class="form-group">
    <input type="text" name="monitor" id="monitor" class="form-control" value="{{$monitoriaEditar->monitor}}">
</div>

<div class="form-group">
    <input type="date" name="fecha" id="fecha" class="form-control" value="{{$monitoriaEditar->fecha}}">
</div>

<div class="form-group">
    <input type="number" name="salon" id="salon" class="form-control" value="{{$monitoriaEditar->salon}}">
</div>

<button type="submit" class="btn btn-warning btn-block" style="">Editar monitoria</button>
</form>
      </div>
</div>

@if (session('update2'))
    <div class="alert alert-success mt-3">
        {{session('update2')}}
    </div>
@endif




@endsection