@extends('layouts.app')

@section('content')


<div class="row justify-content-center">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body" style="background-color: #FFD180">
            <h3 class="text-center mb-3">
                <a href="/alumno" class="btn btn-primary">
                    <i class="mdi mdi-undo-variant"></i> Volver
                </a> 
                DETALLES DEL ALUMNO<hr>
            </h3>


        <div class="card-body">
            <div class="col-md-6">
            <div class="card" style="width: 55rem; background-color: #FFD180">
                @if ( $alumno->foto_estudiante !=NULL )
                <img class="card-img-top imgs" src="/fotosAlumnos/{{ $alumno->foto_estudiante }}" alt="Foto-Alumno" style="width:200px; margin: 0 auto;">
                @else
                <img class="card-img-top imgs" src="{{ asset('images/users.png') }}" alt="Foto-Alumno" style="width:200px; margin: 0 auto;">   
                @endif
            </div>
            </div>
         </div>   
           

        <div class="row">
            

        
            <div class="col-md-2.5">
                <h6 class="card-title card text-info mb-3" style="background-color: #FFD180">
                     <strong><center>Apellido Paterno:</center></strong>
                     <center><p class="card-title">{{ $alumno->ap_paterno}}</p></center>
                </h6>
            </div>
            
            <div class="col-md-2.5">
                <h6 class="card-title card text-info mb-3" style="background-color: #FFD180">
                     <strong><center>Apellido materno:</center></strong>
                     <center><p class="card-title">{{ $alumno->ap_materno}}</p></center>
                </h6>
            </div>
            <div class="col-md-3">
                <h6 class="card-title card text-info  mb-3" style="background-color: #FFD180">
                      <strong><center >Nombres:</center></strong>
                     <center><p class="card-title">{{ $alumno->nombres}}</p></center>
                </h6>
            </div>

            <div class="col-md-2.5">
                <h6 class="card-title card text-info mb-3" style="background-color: #FFD180">
                     <strong><center>Carnet de Identidad:</center></strong>
                     <center><p class="card-title">{{ $alumno->ci}}</p></center>
                </h6>
            </div>
             <div class="col-md-3">
                <h6 class="card-title card text-info mb-3" style="background-color: #FFD180">
                     <strong><center>Direccion:</center></strong>
                     <center><p class="card-title">{{ $alumno->direccion}}</p></center>
                </h6>
            </div>

            <div class="col-md-2.7">
                <h6 class="card-title card text-info mb-3" style="background-color: #FFD180">
                     <strong><center>Numero de telefono personal:</center></strong>
                     <center><p class="card-title">{{ $alumno->num_cel}}</p></center>
                </h6>
            </div>

             <div class="col-md-2.7">
                <h6 class="card-title card text-info  mb-3" style="background-color: #FFD180">
                     <strong><center>Fecha de Nacimiento:</center></strong>
                     <center><p class="card-title">{{$alumno->fecha_nac}}</p></center>
                </h6>
            </div>

           <div class="col-md-2.7">
                <h6 class="card-title card text-info mb-3" style="background-color: #FFD180">
                     <strong><center>Sexo:</center></strong>
                     <center><p class="card-title">{{ $alumno->genero}}</p></center>
                </h6>
            </div>
            <div class="col-md-2.7">
                <h6 class="card-title card text-info mb-3" style="background-color: #FFD180">
                     <strong><center>Estado Civil:</center></strong>
                     <center><p class="card-title">{{ $alumno->estado_civil}}</p></center>
                </h6>
            </div>
            <div class="col-md-3">
                <h6 class="card-title card text-info mb-3" style="background-color: #FFD180">
                     <strong><center>Correo Electronico:</center></strong>
                     <center><p class="card-title">{{ $alumno->email}}</p></center>
                </h6>
            </div>
         </div>
            <hr>
            
          <center> <h4 class="card-title text-danger text-center">LUGAR DE NACIMIENTO: <hr></h4></center>
          <div class="row">

            <div class="col-md-3">
                <h6 class="card-title card text-info mb-3" style="background-color: #FFD180">
                     <strong><center>PAIS:</center></strong>
                     <center><p class="card-title">{{ $pais->name}}</p></center>
                </h6>
            </div>

            <div class="col-md-3">
                <h6 class="card-title card text-info mb-3" style="background-color: #FFD180">
                     <strong><center>DEPARTAMENTO:</center></strong>
                     <center><p class="card-title">{{ $dept->name}}</p></center>
                </h6>
            </div>

            <div class="col-md-3">
                <h6 class="card-title card text-info mb-3" style="background-color: #FFD180">
                     <strong><center>PROVINCIA:</center></strong>
                     <center><p class="card-title">{{ $pro->name}}</p></center>
                </h6>
            </div>
             <div class="col-md-3">
                <h6 class="card-title card text-info mb-3" style="background-color: #FFD180">
                     <strong><center>MUNICIO:</center></strong>
                     <center><p class="card-title">{{ $mun->name}}</p></center>
                </h6>
            </div>
         </div>
         <hr>
          <center> <h4 class="card-title text-danger text-center">DATOS DEL PADRE O TUTOR: <hr></h4></center>
          <div class="row">

             <div class="col-md-4">
                <h6 class="card-title card text-info mb-3" style="background-color: #FFD180">
                     <strong><center>Nombre Del Padre o Tutor:</center></strong>
                     <center><p class="card-title">{{ $alumno->nom_tutor }}</p></center>
                </h6>
            </div>

            <div class="col-md-4">
                <h6 class="card-title card text-info mb-3" style="background-color: #FFD180">
                     <strong><center>Numero de Celular o Telefono del Tutor:</center></strong>
                     <center><p class="card-title">{{ $alumno->num_cel_tutor}}</p></center>
                </h6>
            </div>

             <div class="col-md-4">
                <h6 class="card-title card text-info mb-3" style="background-color: #FFD180">
                     <strong><center>¿En caso de ser menor de edad, sus padres están de acuerdo en que estudie en el seminario?:</center></strong>
                     <center><p class="card-title">{{ $alumno->menor_edad}}</p></center>
                </h6>
            </div>
        </div>
        <hr>
          <center> <h4 class="card-title text-danger text-center">DATOS DE URGENCIA: <hr></h4></center>
          <div class="row">


             <div class="col-md-4">
                <h6 class="card-title card text-info mb-3" style="background-color: #FFD180">
                     <strong><center>Llamar en caso de urgencia A:</center></strong>
                     <center><p class="card-title">{{ $alumno->llam_urg}}</p></center>
                </h6>
            </div>
             <div class="col-md-3.5">
                <h6 class="card-title card text-info mb-3" style="background-color: #FFD180">
                     <strong><center>Numero de telefono:</center></strong>
                     <center><p class="card-title">{{ $alumno->num_cel_urg }}</p></center>
                </h6>
            </div>
        </div>

        <hr>
          <center> <h4 class="card-title text-danger text-center">DATOS DE LA IGLESIA A LA CUAL ASISTE: <hr></h4></center>
          <div class="row">

           <div class="col-md-4">
                <h6 class="card-title card text-info mb-3" style="background-color: #FFD180">
                     <strong><center>Iglesia:</center></strong>
                     <center><p class="card-title">{{ $alumno->iglesia}}</p></center>
                </h6>
            </div>

            <div class="col-md-4">
                <h6 class="card-title card text-info mb-3" style="background-color: #FFD180">
                     <strong><center>Pastor:</center></strong>
                     <center><p class="card-title">{{ $alumno->pastor}}</p></center>
                </h6>
            </div>

            <div class="col-md-4">
                <h6 class="card-title card text-info mb-3" style="background-color: #FFD180">
                     <strong><center>fecha de aceptacion a Cristo como Salvador personal:</center></strong>
                     <center><p class="card-title">{{ $alumno->fecha_acept}}</p></center>
                </h6>
            </div>

            <div class="col-md-2">
                <h6 class="card-title card text-info mb-3" style="background-color: #FFD180">
                     <strong><center>Es bautizado por inmersión:</center></strong>
                     <center><p class="card-title">{{$alumno->preg_baut}}</p></center>
                </h6>
            </div>

            <div class="col-md-3.5">
                <h6 class="card-title card text-info  mb-3" style="background-color: #FFD180">
                     <strong><center>Fecha de Bautizo:</center></strong>
                     <center><p class="card-title">{{$alumno->fecha_baut}}</p></center>
                </h6>
            </div>

            <div class="col-md-6">
                <h6 class="card-title card text-info mb-3" style="background-color: #FFD180">
                     <strong><center>cargos o responsabilidades ha desempeñado en su iglesia:</center></strong>
                     <center><p class="card-title">{{$alumno->cargo_est}}</p></center>
                </h6>
            </div>

           
     </div>        
               



  <center> <h4 class="card-title text-danger text-center">INFORMACIÓN ACADÉMICA: <hr></h4></center>

    <div class="row">
            <div class="col-md-4">
                <h6 class="card-title card text-info mb-3" style="background-color: #FFD180">
                     <strong><center>Nivel Academico Logrado.:</center></strong>
                     <center><p class="card-title">{{$alumno->nivel_acad}}</p></center>
                </h6>
            </div>
    </div>
         
                <!--aqui otro formulario de pago-->
         <center> <h4 class="card-title text-danger text-center">MODALIDAD DE PAGO: <hr></h4></center>
               
    
    <div class="row">
               <div class="col-md-6">
                <h6 class="card-title card text-info mb-3" style="background-color: #FFD180">
                     <strong><center>MODALIDAD DE PAGO:</center></strong>
                     <center><p class="card-title">{{$alumno->mod_pago}}</p></center>
                </h6>
               </div>
     </div>


                    <!--*************ootro formulario aparte**************-->
             <center> <h4 class="card-title text-danger text-center">TESTIMONIO PERSONAL: <hr></h4></center>       
                
    
     <div class="row">
                <div class="col-md-4">
                <h6 class="card-title card text-info mb-3" style="background-color: #FFD180">
                     <strong><center>Testimonio de su conversión a Cristo:</center></strong>
                     <center><p class="card-title">{{$alumno->testimonio_conv}}</p></center>
                </h6>
               </div>

               <div class="col-md-4">
                <h6 class="card-title card text-info mb-3" style="background-color: #FFD180">
                     <strong><center>Testimonio de tu servicio cristiano:</center></strong>
                     <center><p class="card-title">{{$alumno->testimonio_serv}}</p></center>
                </h6>
               </div>

               <div class="col-md-4">
                <h6 class="card-title card text-info mb-3" style="background-color: #FFD180">
                     <strong><center>La razón por la cual quieres estudiar en el Seminario Teológico Hagiazo:</center></strong>
                     <center><p class="card-title">{{$alumno->razon_est}}</p></center>
                </h6>
               </div>



                 <div class="col-md-4">
                <h6 class="card-title card text-info mb-3" style="background-color: #FFD180">
                     <strong><center>Observación:</center></strong>
                     <center><p class="card-title">{{$alumno->observ}}</p></center>
                </h6>
                </div> 

                <div class="col-md-4">
                <h6 class="card-title card text-info mb-3" style="max-width: 18rem;""card-header">
                     <strong><center>Fecha de testimonio esta parte debe ser automatico:</center></strong>
                     <center><p class="card-title">{{$alumno->fecha_test}}</p></center>
                </h6>
                </div> 
        </div>
                
                </div>
            </div>
            </div>

            


            </div>
        </div>
    </div>
</div>

@endsection
