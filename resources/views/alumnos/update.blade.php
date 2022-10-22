@extends('layouts.app')

@section('content')
@include('mensajes')



<div class="row justify-content-center">
<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body" style="background-color: #FFD180">

        <h4 class="text-center mb-3">ACTUALIZAR DATOS DEL ALUMNO <hr></h4>
        <form class="forms-sample" method="post" action="{{ route('alumno.update', $alumno->id) }}" enctype="multipart/form-data">
          @csrf
          @method('PATCH')
              <div class="row">
                <div class="col-md-2.5">
                  <p style="color:navy;">APELLIDO PATERNO:</p>
                    <div class="col-sm-12">
                      <input type="text" name="ap_paterno" class="card-title form-control" value="{{ $alumno->ap_paterno }}" required/>
                    </div>
                </div>

                <div class="col-md-2.5">
                     <p style="color:navy;">APELLIDO MATERNO:</p>
                  <div class="col-sm-12">
                    <input type="text" name="ap_materno" class="card-title form-control" value="{{ $alumno->ap_materno }}" required/>
                  </div>
                </div>

                <div class="col-md-3">
                    <p style="color:navy;">NOMBRES:</p>
                    <div class="col-sm-12">
                      <input type="text" name="nombres" class="card-title form-control" value="{{ $alumno->nombres }}" required/>
                    </div>
                 </div>

                <div class="col-md-3">
                    <p style="color:navy;">CARNET DE IDENTIDAD:</p>
                    <div class="col-sm-8">
                      <input type="text" name="ci" class="card-title form-control" value="{{ $alumno->ci }}" required/>
                    </div>
                </div>

                <div class="col-md-3">
                    <p style="color:navy;">DIRECCION:</p> 
                    <div class="col-sm-12">
                       <input type="text" name="direccion" class="card-title form-control" value="{{ $alumno->direccion }}" required/>
                    </div>

                </div>
                 <div class="col-md-3.8">
                    <p style="color:navy;">CORREO ELECTRONICO:</p>
                    <div class="col-sm-15">
                      <input type="text" name="email" class="card-title form-control" value="{{ $alumno->email }}"required/>
                    </div>
                </div>

                <div class="col-md-2.5">
                    <p style="color:navy;">NUMERO DE TELEFONO:</p>
                    <div class="col-sm-8">
                      <input type="number" name="num_cel" class="card-title form-control" value="{{ $alumno->num_cel }}"required/>
                    </div>
                </div>

                <div class="col-md-3">
                    <p style="color:navy;">FECHA DE NACIMIENTO:</p>
                    <div class="col-sm-12">
                      <input type="date" name="fecha_nac" class="card-title form-control" value="{{ $alumno->fecha_nac }}"required/>
                    </div>
                </div>

                      <!--cambio aqui-->
                <div class="col-2">
                     <p style="color:navy;">SEXO:</p>
                    <select id="inputState" class="card-title form-select" name="genero" required>
                        <option value="Hombre" {{($alumno->genero == 'Hombre')?'selected':null}}>Hombre</option>
                        <option value="Mujer"  {{($alumno->genero == 'Mujer')?'selected':null}}>Mujer</option>
                    </select>
                 </div>

                    <!--cambio aqui-->


                <div class="col-md-3">
                <p style="color:navy;">ESTADO CIVIL:</p>
                  <select id="inputState" class="card-title form-select" name="estado_civil" required>
                    <option value="Soltero(a)"    {{($alumno->estado_civil == 'Soltero(a)')?'selected':null}}>Soltero(a)</option>
                    <option value="Casado(a)"     {{($alumno->estado_civil == 'Casado(a)')?'selected':null}}>Casado(a)</option>
                    <option value="Divorciado(a)" {{($alumno->estado_civil == 'Divorciado(a)')?'selected':null}}>Divorciado(a)</option>
                    <option value="Viudo(a)"      {{($alumno->estado_civil == 'Viudo(a)')?'selected':null}}>Viudo(a)</option>
                  </select>
                </div>
            </div>

            <hr>
   <center> <h4 class="card-title text-info text-center">LUGAR DE NACIMIENTO: <hr></h4></center>
         <div class="row">

<!--
                <div class="col-md-3">
                 <p style="color:navy;">SELECCIONAR PAIS:</p>
{{$alumno->paises}}

                  <select id="inputState" class="card-title form-select" name="paise"  required>
                    @foreach($pais as $paises)
                    @if($paises->id == $alumno->paise)
                      <option value="{{$paises->id}}" selected>{{ $paises->name}} </option>
                    @endif
                      <option value="{{$paises->id}}">{{ $paises->name}} </option>
                   @endforeach
                  </select>
                 </div>

                 <div class="col-md-3">
                 <p style="color:navy;">SELECCIONAR DEPARTAMENTO:</p>
                  <select id="inputState" class="card-title form-select" name="departamento"  required>
                    @foreach($depa as $departamentos)
                    @if($departamentos->id == $alumno->departamento)
                      <option value="{{$departamentos->id}}" selected>{{ $departamentos->name}} </option>
                    @endif
                    <option value="{{$departamentos->id}}">{{ $departamentos->name}} </option>
                   @endforeach
   
                  </select>
                 </div>

                
               <div class="col-md-3">
                 <p style="color:navy;">SELECCIONAR PROVINCIA:</p>
                  <select id="inputState" class="card-title form-select" name="provincia"  required>
                    @foreach($prov as $provincias)
                    @if($provincias->id == $alumno->provincia)
                      <option value="{{$provincias->id}}" selected>{{ $provincias->name}} </option>
                    @endif
                      <option value="{{$provincias->id}}">{{ $provincias->name}} </option>
                   @endforeach
                  </select>
                 </div>

            <div class="col-md-3">
                 <p style="color:navy;">SELECCIONAR MUNICIPIO:</p>
                  <select id="inputState" class="card-title form-select" name="municipio"  required>
                    @foreach($mun as $municipios)
                    @if($municipios->id == $alumno->municipio)
                      <option value="{{$municipios->id}}" selected>{{ $municipios->name}} </option>
                    @endif
                      <option value="{{$municipios->id}}">{{ $municipios->name}} </option>
                   @endforeach
                  </select>
                 </div>

           </div>
-->
     
      <div class="row">
                
            @livewire('actualizar-pais',['id'=>$alumno->id])     
       </div>
            <hr>
   <center> <h4 class="card-title text-info text-center">EN CASO DE SER DEPENDIENTE DE UN PADRE O TUTOR LLENE ESTOS DATOS: <hr></h4></center>
         <div class="row">

                <div class="col-md-4">
                    <p style="color:navy;">NOMBRE DEL <BR> PADRE O TUTOR:</p>
                    <div class="col-sm-15">
                      <input type="text" name="nom_tutor" class="card-title form-control" value="{{ $alumno->nom_tutor }}"/>
                    </div>
                </div>

               <div class="col-md-3">
                   <center><p style="color:navy;">NUMERO DE TELEFONO<br> DEL PADRE O TUTOR:</p></center>
                    <div class="col-sm-10">
                      <input type="number" name="num_cel_tutor" class="card-title form-control" value="{{ $alumno->num_cel_tutor }}" />
                    </div>
                </div>



                 <div class="col-5">
                   <center><p style="color:navy;">¿ÉN CASO DE SER MENOR DE EDAD, SUS PADRES ESTAN DEACUERDO EN QUE ESTUDIE EN EL SEMINARIO?:</p></center>

                        <select id="inputState" class="card-title form-select" name="menor_edad" required>
                          <option value=" ">SELECCIONAR OPCION</option>
                            <option value="Mi Padre y Madre estan deacuerdo" {{($alumno->menor_edad == 'Mi Padre y Madre estan deacuerdo')?'selected':null}}>Mi Padre y Madre estan deacuerdo</option>
                            <option value="Mi Padre esta deacuerdo" {{($alumno->menor_edad == 'Mi Padre esta deacuerdo')?'selected':null}}>Mi Padre esta deacuerdo</option>
                            <option value="Mi Madre esta deacuerdo" {{($alumno->menor_edad == 'Mi Madre esta deacuerdo')?'selected':null}}>Mi Madre esta deacuerdo</option>
                            <option value="Mi Padre y Madre NO estan deacuerdo" {{($alumno->menor_edad == 'Mi Padre y Madre NO estan deacuerdo')?'selected':null}}>Mi Padre y Madre NO estan deacuerdo</option>
                         </select>
                 </div>

            </div>
           <hr>
     <center> <h4 class="card-title text-info text-center"> DATOS DE LLAMADA DE URGENCIA: <hr></h4></center>
           <div class="row">

                 <div class="col-md-4">
                   <center><p style="color:navy;">EN CASO DE URGENCIA <br>LLAMAR A:</p></center>
                    <div class="col-sm-12">
                      <input type="text" name="llam_urg" class="card-title form-control" value="{{ $alumno->llam_urg }}" required/>
                    </div>
                 </div>

                <div class="col-md-4">
                     <center><p style="color:navy;">NUMERO DE TELEFONO<br> DE LLAMADA DE URGENCIA:</p></center>
                    <div class="col-sm-12">
                      <input type="text" name="num_cel_urg" class="card-title form-control" value="{{ $alumno->num_cel_urg }}" required/>
                    </div>
                </div>
          </div>
            <hr>

   <center> <h4 class="card-title text-info text-center">DATOS DE LA IGLESIA A LA CUAL ASISTE <hr></h4></center>
         <div class="row">

                <div class="col-md-4">
                   <center><p style="color:navy;">IGLESIA:</p></center>
                    <div class="col-sm-12">
                      <input type="text" name="iglesia" class="card-title form-control" value="{{ $alumno->iglesia }}" required/>
                    </div>
                </div>

                <div class="col-md-4">
                     <center><p style="color:navy;">LOCALIDAD IGLESIA:</p></center>
                    <div class="col-sm-12">
                      <input type="text" name="loc_igl" class="card-title form-control" value="{{ $alumno->loc_igl }}" required/>
                    </div>
                </div>

                <div class="col-md-4">
                   <center><p style="color:navy;">NOMBRE DEL PASTOR:</p></center>
                    <div class="col-sm-12">
                      <input type="text" name="pastor" class="card-title form-control" value="{{ $alumno->pastor }}" required/>
                    </div>
                </div>

                <div class="col-md-4">
                  <center><p style="color:navy;">¿CUANDO ACEPTO USTED A <BR>CRISTO COMO SALVADOR PERSONAL?:</p></center>

                    <select id="inputState" class="card-title form-select" name="fecha_acept" required>
                            <option value=" ">SELECCIONAR OPCION</option>
                            <option value="Primera Infancia (0-5 años)"   {{($alumno->fecha_acept == 'Primera Infancia (0-5 años)')?'selected':null}}>Primera Infancia (0-5 años)</option>
                            <option value="Infancia (6 - 11 años)"        {{($alumno->fecha_acept == 'Infancia (6 - 11 años)')?'selected':null}}>Infancia (6 - 11 años)</option>
                            <option value="Adolescencia (12 - 18 años)"   {{($alumno->fecha_acept == 'Adolescencia (12 - 18 años)')?'selected':null}}>Adolescencia (12 - 18 años)</option>
                            <option value="Juventud (14 - 26 años)"       {{($alumno->fecha_acept == 'Juventud (14 - 26 años)')?'selected':null}}>Juventud (14 - 26 años)</option>
                            <option value="Adultez (27- 59 años)"         {{($alumno->fecha_acept == 'Adultez (27- 59 años)')?'selected':null}}>Adultez (27- 59 años)</option>
                            <option value="Persona Mayor (60 años o mas)" {{($alumno->fecha_acept == 'Persona Mayor (60 años o mas)')?'selected':null}}>Persona Mayor (60 años o mas)</option>

                    </select>
                </div>

                <div class="col-md-3">
                    <center><p style="color:navy;">¿FECHA DE <br> BAUTIZO?:</p></center>
                    <div class="col-sm-8">
                      <input type="date" name="fecha_baut" class="form-control" value="{{ $alumno->fecha_baut }}" required/>
                    </div>
                </div>

                <div class="col-md-3">
                   <center><p style="color:navy;">¿QUE CARGOS O RESPONSABILIDADES HA DESENPEÑADO EN SU IGLESIA?:</p></center>
                    <div class="col-sm-10">
                      <input type="text" name="cargo_est" class="card-title form-control" value="{{ $alumno->cargo_est }}" required/>
                    </div>
                </div>


     </div>
      <hr>

         <center> <h4 class="card-title text-info text-center">INFORMACIÓN ACADÉMICA: <hr></h4></center>

     <div class="row">


       <div class="col-md-6">
                     <center><p style="color:navy;"> <center><p style="color:navy;">SELECCIONE EL NIVEL ACADEMICO LOGRADO:</p></center>

                   <select id="inputState" class="card-title form-select" name="nivel_acad" required>
                    <option value="Primaria" {{($alumno->nivel_acad == 'Primaria')?'selected':null}}>Primaria</option>
                    <option value="Secundaria" {{($alumno->nivel_acad == 'Secundaria')?'selected':null}}>Secundaria</option>
                    <option value="Bachiller" {{($alumno->nivel_acad == 'Bachiller')?'selected':null}}>Bachiller</option>
                    <option value="Universidad" {{($alumno->nivel_acad == 'Universidad')?'selected':null}}>Universidad</option>
                    <option value="Licenciatura" {{($alumno->nivel_acad == 'Licenciatura')?'selected':null}}>Licenciatura</option>

                    <option value="Doctorado" {{($alumno->nivel_acad == 'Doctorado')?'selected':null}}>Doctorado</option>
                    <option value="MAESTRÍA" {{($alumno->nivel_acad == 'MAESTRÍA')?'selected':null}}>MAESTRÍA</option>
                    <option value="ESPECIALIZACIÓN SUPERIOR" {{($alumno->nivel_acad == 'ESPECIALIZACIÓN SUPERIOR')?'selected':null}}>ESPECIALIZACIÓN SUPERIOR</option>
                    <option value="DIPLOMA SUPERIOR" {{($alumno->nivel_acad == 'DIPLOMA SUPERIOR')?'selected':null}}>DIPLOMA SUPERIOR</option>
                    <option value="OTRO" {{($alumno->nivel_acad == 'OTRO')?'selected':null}}>OTRO</option>

                  </select>
                </div>
    </div>
    <hr>
            <h4 class="card-title text-info text-center">MODALIDAD DE PAGO <hr></h4>

    <div class="row">


               <!--informe academico -->

               <div class="col-md-4">

                  <center><p style="color:navy;">MODALIDAD DE PAGO:</p></center>
                  <select id="inputState" class="card-title form-select" name="mod_pago" required>
                    <option value="Mensual 150 Bs" {{($alumno->mod_pago == 'Mensual 150 Bs')?'selected':null}}>Mensual 150 Bs</option>
                    <option value="Por 5 pagos de febrero a junio, se le descuenta un mes, de manera que; cancelaria simplemente bs 600/ semestral" {{($alumno->mod_pago == 'Por 5 pagos de febrero a junio, se le descuenta un mes, de manera que; cancelaria simplemente bs 600/ semestral')?'selected':null}}>Por 5 pagos de febrero a junio, se le descuenta un mes, de manera que; cancelaria simplemente bs 600/ semestral</option>
                    <option value="Por 10 pagos de febrero a diciembre, solo cancelaria la suma de Bs 1200/ anual, (es decir menos dos mensualidades)." {{($alumno->mod_pago == 'Por 10 pagos de febrero a diciembre, solo cancelaria la suma de Bs 1200/ anual, (es decir menos dos mensualidades).')?'selected':null}}>Por 10 pagos de febrero a diciembre, solo cancelaria la suma de Bs 1200/ anual, (es decir menos dos mensualidades).</option>
                  </select>

                </div>
      </div>
       <hr>
            <h4 class="card-title text-info text-center">TESTIMONIO PERSONAL </h4>
             <h5 class="card-title text-info text-center">Por favor, escribe el testimonio breve de tu vida cristiana:<hr></h5>

   <div class="row">
                                   <!-- hasta aqui-->

                                   <!-- testimonio personal-->
                                   <!-- Por favor, escribe el testimonio breve de tu vida cristiana: -->
                <div class="col-md-4">
                    <center><p style="color:navy;">TESTIMONIO DE SU CONVERSION <BR>A CRISTO:</p></center>
                    <div class="col-sm-12">
                      <input type="text" name="testimonio_conv" class="card-title form-control" value="{{ $alumno->testimonio_conv }}" required/>
                    </div>
                </div>

                <div class="col-md-4">
                    <center><p style="color:navy;">TESTIMONIO DE TU SERVICIO <BR>CRISTIANO :</p></center>
                    <div class="col-sm-12">
                      <input type="text" name="testimonio_serv" class="card-title form-control" value="{{ $alumno->testimonio_serv }}" required/>
                    </div>
                </div>

                <div class="col-md-4">
                    <center><p style="color:navy;">LA RAZON POR EL CUAL QUIERES ESTUDIAR EN EL SEMINARIO TEOLOGICO HAGIAZO:</p></center>
                    <div class="col-sm-12">
                      <input type="text" name="razon_est" class="card-title form-control" value="{{ $alumno->razon_est }}" required/>
                    </div>
                </div>

                <!--
                  <div class="col-md-4">
                <label class="col-sm-6 col-form-label">Observación</label>
                <textarea name="observ" class="card-title form-control" rows="4" cols="50"></textarea>
                </div> -->

          </div>


<div class="row mb-5">


                  <div class="col-md-5">
                   <label for="exampleInputUsername1" style="text-align: center;">Foto actual</label>
                  <br>
                  @if ($alumno->foto_estudiante !=NULL)
                      <img src="/fotosAlumnos/{{ $alumno->foto_estudiante }}" alt="foto profe" style="max-width: 100px; margin: 0 auto;">
                  @else
                      <img class="card-img-top" src="{{ asset('images/users.png') }}" alt="Foto-Profe" class="imgs" style="width:100px; margin: 0 auto;">
                  @endif
                </div>

                 <div class="col-md-10">
                    <div class="col-md-10">
                  <label for="exampleInputUsername1">Cambiar Foto</label>
                  <input type="file" name="foto_estudiante" class="form-control">
                </div>



            <div class="form-group text-center mt-5 mb-3">
                <button type="submit" class="btn btn-primary mr-2 mb-3">Actualizar datos del  Alumno</button>
                <a href="/"  class="btn btn-inverse-dark btn-fw mb-3">Cancelar</a>
            </div>
        </form>
        </div>

</div>
</div>

@endsection
