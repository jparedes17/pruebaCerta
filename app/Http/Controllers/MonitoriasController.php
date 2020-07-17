<?php

namespace App\Http\Controllers;

use App\Monitorias;
use Illuminate\Http\Request;
use App;
use App\Monitores;

class MonitoriasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $monitorias = App\Monitorias::all();
        return view('monitorias', compact('monitorias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $monitorias = App\Monitorias::all();
        $monitores = App\Monitores::all();
        return view('monitorias', compact('monitores', 'monitorias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $monitoriasAgregar = new Monitorias();

        $request->validate([
            'materia' => 'required',
            'monitor' => 'required',
            'fecha' => 'required',
            'salon' => 'required',
        ]);

        $monitoriasAgregar->materia = $request->materia;
        $monitoriasAgregar->monitor = $request->monitor;
        $monitoriasAgregar->fecha = $request->fecha;
        $monitoriasAgregar->salon = $request->salon;
        $monitoriasAgregar->save();
        return back()->with('agregar2', 'La monitoria se agrego correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Monitorias  $monitorias
     * @return \Illuminate\Http\Response
     */
    public function show(Monitorias $monitorias)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Monitorias  $monitorias
     * @return \Illuminate\Http\Response
     */
    public function edit($idMonitorias)
    {
        $monitores = App\Monitores::all();   
        $monitoriaEditar = App\Monitorias::findOrFail($idMonitorias);
        return view('editar2', compact('monitoriaEditar','monitores'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Monitorias  $monitorias
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idMonitorias)
    {

        $monitoriasUpdate = App\Monitorias::findOrFail($idMonitorias);
        $monitoriasUpdate->materia = $request->materia;
        $monitoriasUpdate->monitor = $request->monitor;
        $monitoriasUpdate->fecha = $request->fecha;
        $monitoriasUpdate->salon = $request->salon;
        $monitoriasUpdate->save();
        return back()->with('update2', 'La monitoria se ha actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Monitorias  $monitorias
     * @return \Illuminate\Http\Response
     */
    public function destroy($idMonitorias)
    {
        $monitoriasEliminar = App\Monitorias::findOrFail($idMonitorias);
        $monitoriasEliminar->delete();
        return back()->with('Eliminar', 'La monitoria ha sido eliminada correctamente');

    }
}
