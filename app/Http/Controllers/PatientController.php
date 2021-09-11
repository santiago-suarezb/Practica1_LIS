<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient; //Modelo de pacientes

class PatientController extends Controller //Calse que hace el llamado al modelo
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $patients = Patient::all(); //Trae todos los datos por medio del método all en laravel
        return view('patients.index')->with('patients',$patients); //Los registros se guardan en $patients y se mandan a la vista
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() //Me manda a la página para crear
    {
        return view('patients.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) //Método store para guardar la información
    {
        $patients = new Patient(); //Instancia de pacientes 

        //Guarda en cada columna lo que viene del formulario por el método get la vista es create
        $patients->documento = $request->get('documento');
        $patients->nombre = $request->get('nombre');
        $patients->apellido = $request->get('apellido');
        $patients->sexo = $request->get('sexo');
        $patients->eps = $request->get('eps');

        $patients->save(); //Método save guarda todo lo anterior

        return redirect('/patients'); //Recarga de nuevo la página para mostrar la info
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) //Debe llevar a la pagina del edit 
    {
        $patient = Patient::find($id); //Traerá un solo paciente
        return view('patients.edit')->with('patient',$patient); //Retorna a la vista de editar
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) 
    {
        $patient = Patient::find($id); //Trae un solo paciente y el criterio es el id

        $patient->documento = $request->get('documento');
        $patient->nombre = $request->get('nombre');
        $patient->apellido = $request->get('apellido');
        $patient->sexo = $request->get('sexo');
        $patient->eps = $request->get('eps');

        $patient->save();

        return redirect('/patients');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $patient = Patient::find($id);
        $patient->delete(); //método para eliminar
        return redirect('/patients');
    }
}
