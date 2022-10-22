@extends('layouts.app')

@section('content')

@include('mensajes')

/*  ------------------------------------------------------------------------------------------------------------------- */

@if(!empty($alumnos))
  <div class="row justify-content-center">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
            <h2 class="text-center mb-3">
                <a href="/alumno" class="btn btn-primary">
                    <i class="mdi mdi-undo-variant"></i> Volver
                </a> 
                MI PERFIL ESTUDIANTIL<hr>
            </h2>

        <div class="row">
            <div class="col-md-6">
            <div class="card" style="width: 30rem;">
                @if ( $alumno->foto_estudiante !=NULL )
                <img class="card-img-top imgs" src="/fotosAlumnos/{{ $alumno->foto_estudiante }}" alt="Foto-Alumno" style="width:200px; margin: 0 auto;">
                @else
                <img class="card-img-top imgs" src="{{ asset('images/users.png') }}" alt="Foto-Alumno" style="width:200px; margin: 0 auto;">   
                @endif
                
                <div class="card-body">
                <h6 class="card-title"><strong>Nombres:</strong>
                     {{ $alumno->nombres }} <hr>
                </h6>

                <h6 class="card-title"><strong>Apellido Paterno:</strong>
                     {{ $alumno->ap_paterno }} <hr>
                </h6>

                <h6 class="card-title"><strong>Apellido Materno:</strong>
                     {{ $alumno->ap_materno }} <hr>
                </h6>  

                <h5 class="card-title"><strong>Carnet de Identidad:</strong> 
                    {{ $alumno->ci }} 
                    <hr>
                </h5>


                <h5 class="card-title"><strong>Telefono o Celular Personal:</strong> 
                    {{ $alumno->num_cel }} 
                    <hr>
                </h5>
                

                <h5 class="card-title"><strong>Correo Electronico:</strong> 
                    {{ $alumno->email }} 
                    <hr>
                </h5>

                <h5 class="card-title"><strong>Fecha de Nacimiento:</strong> 
                    {{ $alumno->fecha_nac }} 
                    <hr>
                </h5>
             
                <h5 class="card-title"><strong>Iglesia:</strong> 
                    {{ $alumno->iglesia }} 
                    <hr>
                </h5> 
   </form>                            

/*  ------------------------------------------------------------------------------------------------------------------- */

@endsection
