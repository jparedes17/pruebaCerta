<?php

namespace App\Http\Controllers;

use App\Monitores;
use Illuminate\Http\Request;
use App;

class MonitoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $monitores = App\Monitores::paginate(2);
        return view('monitores', compact('monitores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $monitoresAgregar = new Monitores;

        $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'programaAcademico' => 'required',
            'semestre' => 'required',
            'cedula' => 'required',
            'contacto' => 'required',
        ]);

        $monitoresAgregar->nombre = $request->nombre;
        $monitoresAgregar->apellido = $request->apellido;
        $monitoresAgregar->programaAcademico = $request->programaAcademico;
        $monitoresAgregar->semestre = $request->semestre;
        $monitoresAgregar->cedula = $request->cedula;
        $monitoresAgregar->contacto = $request->contacto;
        $monitoresAgregar->save();
        return back()->with('agregar', 'El monitor se agrego correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Monitores  $monitores
     * @return \Illuminate\Http\Response
     */
    public function show(Monitores $monitores)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Monitores  $monitores
     * @return \Illuminate\Http\Response
     */
    public function edit($idMonitores)
    {
        $monitorEditar = App\Monitores::findOrFail($idMonitores);
        return view('editar', compact('monitorEditar'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Monitores  $monitores
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idMonitores)
    {
        $monitoresUpdate = App\Monitores::findOrFail($idMonitores);
        $monitoresUpdate->nombre = $request->nombre;
        $monitoresUpdate->apellido = $request->apellido;
        $monitoresUpdate->programaAcademico = $request->programaAcademico;
        $monitoresUpdate->semestre = $request->semestre;
        $monitoresUpdate->cedula = $request->cedula;
        $monitoresUpdate->contacto = $request->contacto;
        $monitoresUpdate->save();
        return back()->with('update', 'El monitor se ha actualizado correctamente');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Monitores  $monitores
     * @return \Illuminate\Http\Response
     */
    public function destroy($idMonitores)
    {
        $monitoriesEliminar = App\Monitores::findOrFail($idMonitores);
        $monitoriesEliminar->delete();
        return back()->with('Eliminar2', 'La monitoria ha sido eliminada correctamente');
    }
}
