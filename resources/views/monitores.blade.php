@extends('plantilla')
@section('contenido')
<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-5">
        <h3 class="text-center mb-4" style="font-family: 'Alegreya SC';font-size: 22px;">AGREGAR MONITORES</h3>

        <form action="{{route('store')}}" method="POST">
            @csrf

            <div class="form-group">
                <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre" required
                    style="align-content: center">
            </div>

            @error('nombre')
            <div class="alert alert-danger">
                El nombre es requerido
            </div>
            @enderror

            <div class="form-group">
                <input type="text" name="apellido" id="apellido" class="form-control" placeholder="Apellido" required>
            </div>

            @error('descripcion')
            <div class="alert alert-danger">
                La descripcion es requerido
            </div>
            @enderror

            <div class="form-group">
                <input type="text" name="programaAcademico" id="programaAcademico" class="form-control"
                    placeholder="Programa Academico" required>
            </div>

            @error('programaAcademico')
            <div class="alert alert-danger">
                El programa academico es requerido
            </div>
            @enderror

            <div class="form-group">
                <input type="number" name="semestre" id="semestre" class="form-control" placeholder="Semestre" required>
            </div>

            @error('semestre')
            <div class="alert alert-danger">
                El semestre es requerido
            </div>
            @enderror

            <div class="form-group">
                <input type="number" name="cedula" id="cedula" class="form-control" placeholder="Cedula" required>
            </div>

            @error('cedula')
            <div class="alert alert-danger">
                La cedula es requerida
            </div>
            @enderror

            <div class="form-group">
                <input type="number" name="contacto" id="contacto" class="form-control"
                    placeholder="Informacion de Contacto" required>
            </div>

            @error('contacto')
            <div class="alert alert-danger">
                El contacto es requerido
            </div>
            @enderror

            <button type="submit" class="btn btn-success btn-block" style="">Enviar</button>
        </form>
    </div>


    <div class="col-md-3"></div>
    <div class="col-md-8">
        <br>
        <table class="table">
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Programa Academico</th>
                <th>Semestre</th>
                <th>Cedula</th>
                <th>Informacion de contacto</th>
                <th>Editar/Eliminar</th>
            </tr>
            @foreach ($monitores as $moni)
            <tr>
                <td>{{$moni->idMonitores}}</td>
                <td>{{$moni->nombre}}</td>
                <td>{{$moni->apellido}}</td>
                <td>{{$moni->programaAcademico}}</td>
                <td>{{$moni->semestre}}</td>
                <td>{{$moni->cedula}}</td>
                <td>{{$moni->contacto}}</td>
                <td>
                    <a href="{{route('editar', $moni->idMonitores)}}" class="btn btn-warning col-sm-6">Editar</a>
                    <form action="{{route('eliminar2', $moni->idMonitores)}}" method="POST" class="d-inline col-sm-3">
                        @method('DELETE')
                        @csrf
                        <button type="sumbit" class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</div>

@if (session('agregar'))
<div class="alert alert-success mt-3">
    {{session('agregar')}}
</div>
@endif
</div>
</div>

@endsection