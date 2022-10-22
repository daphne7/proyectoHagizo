@extends('layouts.app')

@section('content')


<div class="row justify-content-center">
  <div class="card">
        <div class="card-body" style="background-color: #FFD180">

  
        <div class="card-body">
          <h4 class="card-title text-info text-center">REGISTRAR NUEVO ALUMNO <hr></h4>
        <form class="forms-sample" method="post" action="{{ route('alumno.store') }}" enctype="multipart/form-data">
            @csrf
      <div class="row">
               <div class="col-md-3"> 
                    <center><p style="color:navy;">APELLIDO PATERNO:</p></center> 
                    <div class="col-sm-10">
                      <input type="text" name="ap_paterno" class="card-title form-control" />
                    </div>
                </div>

                <div class="col-md-3">
                    <center><p style="color:navy;">APELLIDO MATERNO:</p></center> 
                    <div class="col-sm-10  ">
                      <input type="text" name="ap_materno" class="card-title form-control" />
                    </div>
                </div>
                <div class="col-md-3">
                    <center><p style="color:navy;">NOMBRES:</p></center> 
                    <div class="col-sm-10 ">
                      <input type="text" name="nombres" class="card-title form-control" required />
                    </div>
                </div>

                
                <div class="col-md-3">
                    <center><p style="color:navy ;">CARNET DE IDENTIDAD:</p></center> 
                    <div class="col-sm-12 ">
                      <input type="text" name="ci" class="card-title form-control" required/>
                    </div>
                </div>  

                 <div class="col-md-3">
                    <center><p style="color:navy ;">DIRECCION:</p></center> 
                    <div class="col-sm-12 ">
                      <input type="text" name="direccion" class="card-title form-control" required/>
                    </div>
                </div>

                <div class="col-md-3">
                    <center><p style="color:navy ;">NUMERO DE TELEFONO PERSONAL:</p></center> 
                    <div class="col-sm-12 ">
                      <input type="text" name="num_cel" class="card-title form-control" required/>
                    </div>
                </div>  
  
                 <div class="col-md-3">
                   <center><p style="color:navy;">CORREO ELECTRONICO:</p></center> 
                    <div class="col-sm-12 ">
                      <input type="text" name="email" class="card-title form-control" required />
                    </div>
                 </div>
       

                <div class="col-md-3">
                   <center><p style="color:navy;">FECHA DE NACIMIENTO:</p></center> 
                    <div class="col-sm-12 ">
                      <input type="date" name="fecha_nac" class="form-control" required/>
                    </div>
                </div>

                <div class="col-md-2">
                    <center><p style="color:navy; ">SEXO:</p></center> 
                    <select name="genero" class="card-title form-control" required>
                           <option value="Hombre">Hombre</option>
                           <option value="Mujer">Mujer</option> 
                    </select>
                </div>    
            
                <div class="col-md-3">
                    <center><p style="color:navy;">ESTADO CIVIL:</p></center> 
                    <select name="estado_civil" class="card-title form-control" required>
                       
                           <option value="Soltero(a)">Soltero(a)</option>
                           <option value="Casado(a)">Casado(a)</option>
                           <option value="Divorciado(a)">Divorciado(a)</option>
                           <option value="Viudo(a)">Viudo(a)</option>
                    </select>
                </div> 
          </div> 

<hr>
   <center> <h4 class="card-title text-info text-center">LUGAR DE NACIMIENTO: <hr></h4></center>

      <div class="row">
                
             @livewire('register-pais-component')
               
       </div>
     <hr>
     <center> <h4 class="card-title text-info text-center">EN CASO DE SER DEPENDIENTE DE UN PADRE O TUTOR LLENE ESTOS DATOS: <hr></h4></center>
       <div class="row">

                <div class="col-md-4"> 
                    <center><p style="color:navy;">NOMBRE DEL <br> PADRE O TUTOR:</p></center> 
                    <div class="col-sm-10 ">
                      <input type="text" name="nom_tutor" class="card-title form-control" />
                    </div>
                </div>
 
            

                <div class="col-md-3.5">
                   <center><p style="color:navy;">NUMERO DE TELEFONO<br> DEL PADRE O TUTOR:</p></center> 
                        <div class="col-sm-10">
                      <input type="number" name="num_cel_tutor" class="card-title form-control " />
                    </div>
                </div>

                  <div class="col-md-4">
                  <center><p style="color:navy;">¿ÉN CASO DE SER MENOR DE EDAD, SUS PADRES ESTAN DEACUERDO EN QUE ESTUDIE EN EL SEMINARIO?:</p></center>  
                    <select name="menor_edad" class="card-title form-control ">
                           <option value=" ">SELECCIONAR OPCION</option>
                           <option value="Mi Padre y Madre estan deacuerdo">Mi Padre y Madre estan deacuerdo</option>
                           <option value="Mi Padre esta deacuerdo">Mi Padre esta deacuerdo </option>
                           <option value="Mi Madre esta deacuerdo">Mi Madre esta deacuerdo </option>
                           <option value="Mi Padre y Madre NO estan deacuerdo">Mi Padre y Madre NO estan deacuerdo</option>
                          
                    </select>
                </div>
           </div>   
           <hr>
     <center> <h4 class="card-title text-info text-center"> DATOS DE LLAMADA DE URGENCIA: <hr></h4></center>
           <div class="row">

                <div class="col-md-3">
                   <center><p style="color:navy;"> EN CASO DE URGENCIA <br>LLAMAR A:</p></center> 
                    <div class="col-sm-10 ">
                      <input type="text" name="llam_urg" class="card-title form-control " required/>
                    </div>
                </div>

                <div class="col-md-3">
                   <center><p style="color:navy;">NUMERO DE TELEFONO<br> DE LLAMADA DE URGENCIA:</p></center> 
                    <div class="col-sm-10">
                      <input type="number" name="num_cel_urg" class="card-title form-control "required />
                    </div>
                </div>
           </div> 
           <hr>
          <center> <h4 class="card-title text-info text-center"> DATOS DE LA IGLESIA A LA CUAL ASISTE <hr></h4></center>
           <div class="row">

                <div class="col-md-4">
                   <center><p style="color:navy;">IGLESIA:</p></center> 
                    <div class="">
                      <input type="text" name="iglesia" class="card-title form-control " required/>
                    </div>
                </div>

                <div class="col-md-4">
                   <center><p style="color:navy;">LOCALIDAD IGLESIA:</p></center> 
                    <div class="">
                      <input type="text" name="loc_igl" class="card-title form-control"required />
                    </div>
                </div>

                <div class="col-md-4">
                  <center><p style="color:navy;">NOMBRE DEL PASTOR:</p></center> 
                    <div class="">
                      <input type="text" name="pastor" class="card-title form-control" required/>
                    </div>
                </div>

             </div>  
                           
           <div class="row">
            <div class="col-md-4">
                  <center><p style="color:navy;">¿CUANDO ACEPTO USTED A <BR>CRISTO COMO SALVADOR PERSONAL?:</p></center>  
                    <select name="fecha_acept" class="card-title form-control "required>
                       
                           <option value="Primera Infancia (0-5 años)">Primera Infancia (0-5 años)</option>
                           <option value="Infancia (6 - 11 años)">Infancia (6 - 11 años)</option>
                           <option value="Adolescencia (12 - 18 años)">Adolescencia (12 - 18 años)</option>
                           <option value="Juventud (14 - 26 años)">Juventud (14 - 26 años)</option>
                           <option value="Adultez (27- 59 años)">Adultez (27- 59 años)</option>
                           <option value="Persona Mayor (60 años o mas)">Persona Mayor (60 años o mas) </option>
                          
                    </select>
                </div>




                <div class="col-md-1.5">
                  <center><p style="color:navy;">¿ES BAUTIZADO <BR>POR INMERSION?:</p></center> 
                    <select name="preg_baut" class="card-title form-control "required>
                       
                           <option value="Si">Si</option>
                           <option value="No">No </option>
                           
                    </select>
                </div>    
                
                <div class="card-title col-md-3">
                    <center><p style="color:navy;">¿FECHA DE <br> BAUTIZO?:</p></center> 
                    <div class="card-title col-sm-10 ">
                      <input type="date" name="fecha_baut" class="card-title form-control " required/>
                    </div>
                </div>
        
                <div class="col-md-3">
                   <center><p style="color:navy;">¿QUE CARGOS O RESPONSABILIDADES HA DESENPEÑADO EN SU IGLESIA?:</p></center> 
                    <div class="card-title col-sm-10 ">
                    <textarea name="cargo_est" class="card-title form-control " rows="4" cols="50" required></textarea>
                    </div>
                </div>


              
          </div>
          <hr>
          <center> <h4 class="card-title text-info text-center">INFORMACIÓN ACADÉMICA: <hr></h4></center>

          <div class="row">

                 <div class="col-md-4">
                  <center><p style="color:navy;">SELECCIONE EL NIVEL ACADEMICO LOGRADO:</p></center> 
                    <select name="nivel_acad" class="card-title form-control "required>
                       
                           <option value="PRIMARIA">PRIMARIA</option>
                           <option value="SECUNDARIA">SECUNDARIA </option>
                           <option value="BACHILLER">BACHILLER</option>
                           <option value="UNIVERSIDAD">UNIVERSIDAD </option>
                           <option value="LICENCIATURA">LICENCIATURA</option>
                           <option value="Doctorado">DOCTORADO</option>
                           <option value="MAESTRÍA">MAESTRÍA</option>
                           <option value="ESPECIALIZACIÓN SUPERIOR">ESPECIALIZACIÓN SUPERIOR</option>
                           <option value="DIPLOMA SUPERIOR.">DIPLOMA SUPERIOR</option>
                           <option value="OTRO">OTRO</option>
                          
                    </select>
                </div>    
    

           </div>
           <hr>
            <h4 class="card-title text-info text-center">MODALIDAD DE PAGO <hr></h4>
         
           <div class="row">
           
                 <div class="col-md-6">
                      <center><p style="color:navy;">MODALIDAD DE PAGO:</p></center> 
                    <select name="mod_pago" class="card-title form-control "required>
                       
                           <option value="Mensual 150 Bs">Mensual 150 Bs </option>
                           <option value="Por 5 pagos de febrero a junio, se le descuenta un mes, de manera que; cancelaria simplemente bs 600/ semestral ">Por 5 pagos de febrero a junio, se le descuenta un mes, de manera que; cancelaria simplemente bs 600/ semestral  </option>
                           <option value="Por 10 pagos de febrero a diciembre, solo cancelaria la suma de Bs 1200/ anual, (es decir menos dos mensualidades).">Por 10 pagos de febrero a diciembre, solo cancelaria la suma de Bs 1200/ anual, (es decir menos dos mensualidad </option>
                          
                    </select>
                </div>  

                   <!-- este campo debe ser automatico se debe poner la fecha actual -->
               <!-- <div class="col-md-4">
                   <center><p style="color:navy;">FECHA DE AFIRMACION:</p></center> 
                    <div class="col-sm-10 ">
                      <input type="date" name="afir_conf" class="card-title form-control " />
                    </div>
                </div>
              -->

            </div>
            <hr>
            <h4 class="card-title text-info text-center">TESTIMONIO PERSONAL </h4>
             <h5 class="card-title text-info text-center">Por favor, escribe el testimonio breve de tu vida cristiana:<hr></h5>

             <div class="row">
                 <div class="col-md-4">
                    <center><p style="color:navy;">TESTIMONIO DE SU CONVERSION <BR>A CRISTO:</p></center> 
                    <div class="card-title col-sm-10 ">
                    <textarea name="testimonio_conv" class="card-title form-control" rows="4" cols="50"required></textarea>
                    </div>
                </div>

                 <div class="col-md-4">
                    <center><p style="color:navy;">TESTIMONIO DE TU SERVICIO <BR>CRISTIANO :</p></center> 
                    <div class="col-sm-10 ">
                    <textarea name="testimonio_serv" class="card-title form-control" rows="4" cols="50"required></textarea>
                    </div>
                </div>

                 <div class="col-md-4">
                  <center><p style="color:navy;">LA RAZON POR EL CUAL QUIERES ESTUDIAR EN EL SEMINARIO TEOLOGICO HAGIAZO:</p></center> 
                    <div class="col-sm-10 ">
                    <textarea name="razon_est" class="card-title form-control" rows="4" cols="50"required></textarea>
                    </div>
                </div>

               <!-- <div class="col-md-4">
                    <label class="card-title col-sm-6 col-form-label">Fecha de testimonio</label>
                    <div class="col-sm-10 ">
                      <input type="date" name="fecha_test" class="card-title form-control" />
                    </div>
                </div>
              -->

             </div>

    
            <div class="card-body">

            <div class="col-md-4">
                    <label class="col-sm-6 col-form-label">foto del Estudiante</label>
                    <div class="col-sm-10">
                      <input type="file" name="foto_estudiante" class="form-control"required />
                    </div>
                </div>
            </div>
          
            <div class="form-group text-center">


                <button type="submit" class="btn btn-inverse-success mr-2 mb-3">Registrar Alumno</button>
                <a href="/"  class="btn btn-inverse-danger btn-fw mb-3">Cancelar</a>
            </div>
        </form>
        </div>
    </div>
</div>
</div>

@endsection
 