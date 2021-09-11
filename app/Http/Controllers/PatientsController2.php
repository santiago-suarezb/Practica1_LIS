<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PatientsController extends Controller
{
    public function index(){
        return view('patients.index');
    }

    public function create(){
        return view('patients.create');    
    }

    public function show($name){
        return view('patients.show' , ['name' => $name]);
    }
}
