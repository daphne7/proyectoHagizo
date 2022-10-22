@extends('layouts.app')

@section('content')

@include('mensajes')

<div class="row justify-content-center">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
            <h2 class="text-center mb-3">
                DETALLES DEL PROFESOR<hr>
            </h2>

        <div class="row">
            <div class="col-md-12">
            <div class="card" style="width: 60rem;">
                @if ( $prof->foto_profesor !=NULL )
                <img class="card-img-top" src="/fotosProfes/{{ $prof->foto_profesor }}" alt="Foto-Profe" class="imgs" style="width:200px; margin: 0 auto;">
                @else
                <img class="card-img-top" src="{{ asset('images/users.png') }}" alt="Foto-Profe" class="imgs" style="width:200px; margin: 0 auto;">   
                @endif

              
                <h6 class="card-title"><strong>Nombres:</strong>
                     {{ $prof->nombres }} <hr>
                </h6>

                <h6 class="card-title"><strong>Apellido Paterno:</strong>
                     {{ $prof->ap_paterno }} <hr>
                </h6>

                <h6 class="card-title"><strong>Apellido Materno:</strong>
                     {{ $prof->ap_materno }} <hr>
                </h6> 

                <h6 class="card-title"><strong>Direccion Actual:</strong>
                     {{ $prof->direccion }} <hr>
                </h6>  

                <h5 class="card-title"><strong>Carnet de Identidad:</strong> 
                    {{ $prof->ci }} 
                    <hr>
                </h5>
               
                  <h5 class="card-title"><strong>Pais:</strong> 
                    {{ $prof->paise }} 
                    <hr>
                </h5>

                <h5 class="card-title"><strong>Departamento:</strong> 
                    {{ $prof->departamento }} 
                    <hr>
                </h5>

                <h5 class="card-title"><strong>Provincia:</strong> 
                    {{ $prof->provincia }} 
                    <hr>
                </h5>
                <h5 class="card-title"><strong>Municipio:</strong> 
                    {{ $prof->municipio }} 
                    <hr>
                </h5>

                <h5 class="card-title"><strong>Telefono o Celular Personal:</strong> 
                    {{ $prof->num_cel }} 
                    <hr>
                </h5>
                

                <h5 class="card-title"><strong>Correo Electronico:</strong> 
                    {{ $prof->email }} 
                    <hr>
                </h5>

                <h5 class="card-title"><strong>Fecha de Nacimiento:</strong> 
                    {{ $prof->fecha_nac }} 
                    <hr>
                </h5>
             
                <h5 class="card-title"><strong>Sexo:</strong> 
                    {{ $prof->genero }} 
                    <hr>
                </h5>

                <h5 class="card-title"><strong>Estado Civil:</strong> 
                    {{ $prof->estado_civil }} 
                    <hr>
                </h5>
              
                
                <h5 class="card-title"><strong>Profesión:</strong> 
                    {{ $prof->profesion }} 
                    <hr>
                </h5>

                <h5 class="card-title"><strong>Rut No:</strong> 
                    {{ $prof->rut }} 
                    <hr>
                </h5>
                 
                <a href="/profe/create" class="btn btn-primary">
                    <i class="mdi mdi-undo-variant"></i> Volver
                </a>
                </div>
            </div>
            </div>
        </div>


            </div>
        </div>
    </div>
</div>

@endsection
