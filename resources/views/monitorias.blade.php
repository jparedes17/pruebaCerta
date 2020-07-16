@extends('plantilla')
@section('contenido')
      <div class="row">
        <div class="col-md-2"></div>
          <div class="col-md-5">
              <h3 class="text-center mb-4">Agregar Monitorias</h3>

          <form action="{{route('store2')}}" method="POST">
        @csrf

    <div class="form-group">
        <input type="text" name="materia" id="materia" class="form-control" placeholder="Materia" required style="align-content: center">
    </div>

    @error('Materia')
        <div class="alert alert-danger">
               La materia es requerida
        </div>
    @enderror

    <div class="form-group">
        <input type="text" name="monitor" id="monitor" class="form-control" placeholder="Monitor" required>
    </div>

    @error('monitor')
    <div class="alert alert-danger">
           El monitor es requerido
    </div>
    @enderror

    <div class="form-group">
        <input type="date" name="fecha" id="fecha" class="form-control" required>
    </div>

    @error('fecha')
    <div class="alert alert-danger">
            La fecha es requerida
    </div>
    @enderror

    <div class="form-group">
        <input type="number" name="salon" id="salon" class="form-control" placeholder="Salon" required>
    </div>

    @error('salon')
    <div class="alert alert-danger">
           El salon es requerido
    </div>
    @enderror

    <button type="submit" class="btn btn-success btn-block" style="">Enviar</button>
</form>
          </div>
      </div>

<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-8">
        <table class="table">
            <tr>
                <th>ID</th>
                <th>Materia</th>
                <th>Monitor</th>
                <th>Fecha</th>
                <th>Salon</th>
                <th>Editar/Eliminar</th>
            </tr>
            @foreach ($monitorias as $monit)
                <tr>
                <td>{{$monit->id}}</td>
                <td>{{$monit->materia}}</td>
                <td>{{$monit->monitor}}</td>
                <td>{{$monit->fecha}}</td>
                <td>{{$monit->salon}}</td>
                <td>
                <a href="{{route('editar2', $monit->id)}}" class="btn btn-warning">Editar</a>
                </td>
                </tr>
            @endforeach
        </table>
    </div>
</div>

@if (session('agregar2'))
    <div class="alert alert-success mt-3">
        {{session('agregar2')}}
    </div>
@endif
          </div>
      </div>
    
@endsection