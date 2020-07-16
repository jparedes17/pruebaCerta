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
        $monitores = App\Monitores::all();
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
        $monitoresAgregar->nombre = $request->nombre;
        $monitoresAgregar->apellido = $request->apellido;
        $monitoresAgregar->programaAcademico = $request->programaAcademico;
        $monitoresAgregar->semestre = $request->semestre;
        $monitoresAgregar->cedula = $request->cedula;
        $monitoresAgregar->contacto = $request->contacto;
        $monitoresAgregar->save();
        return back()->with('agregar', 'El monito se agrego correctamente');
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
    public function edit(Monitores $monitores)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Monitores  $monitores
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Monitores $monitores)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Monitores  $monitores
     * @return \Illuminate\Http\Response
     */
    public function destroy(Monitores $monitores)
    {
        //
    }
}
