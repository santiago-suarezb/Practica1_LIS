@extends('layouts.layout') <!--Importar el layout que el la base "plantilla"-->

@section('content')
    <h1>Editar información del paciente.</h1>
    <form action="/patients/{{$patient->id}}" method="POST"><!--Se editará el paciente por ID-->
        @csrf
        @method('PUT')<!--Método put que es el que se va a usar-->
        <div class="mb-3">
          <label for="" class="form-label">Documento</label>
          <input type="text" class="form-control" id="documento" name="documento" value="{{$patient->documento}}"> <!--Value es el valor inicial por defecto-->
        </div>
        <div class="mb-3">
          <label for="" class="form-label">Nombre</label>
          <input type="text" class="form-control" id="nombre" name="nombre" value="{{$patient->nombre}}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Apellidos</label>
            <input type="text" class="form-control" id="apellido" name="apellido" value="{{$patient->apellido}}">
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Sexo</label>
            <input type="text" class="form-control" id="sexo" name="sexo" value="{{$patient->sexo}}">
          </div>
          <div class="mb-3">
            <label for="" class="form-label">EPS</label>
            <input type="text" class="form-control" id="eps" name="eps"  value="{{$patient->eps}}">
          </div>
          <a href="/patients" class="btn btn-secondary">Cancelar</a>
        <button type="submit" class="btn btn-primary">Guardar</button>
      </form>
@endsection

