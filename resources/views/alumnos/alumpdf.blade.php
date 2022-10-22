
<div class="card">
    <div class="card-body">
        
        <link  href="{{ public_path('css/app.css') }}" rel="stylesheet" type="text/css">

    <table class="table table-hover">
        <thead>
    <tr>
        <center><img src="{{ public_path('images/faces/Logohoja.png') }}"
                         width="700" height="125" alt="InternetCtrl"></center>
    <br>

    <h4 class="card-title text-center">LISTA DE ALUMNOS </h4>  
      </tr>
     </thead>
    </table>
    <div class="table-responsive">
        <table class="table table-hover">
        <thead>
            <tr>
        
            <tr>
            <th>N°</th>
            <th>Nombre del Alumno</th>
            <th>Apellido Paterno</th>
            <th>Apellido Materno</th>
            <th>carnet de identidad</th>
            <th>Numero de Celular</th>

            </tr>
            </tr>
        </thead>
        <tbody>
              @foreach ($alumnos as $alumno)
              <tr>
                <td><font style="text-transform: uppercase;">{{ $alumno->count()}} </font></td>
                <td><font style="text-transform: uppercase;">{{ $alumno->nombres }} </font></td>
                <td><font style="text-transform: uppercase;">{{ $alumno->ap_paterno  }} </font></td>
                <td><font style="text-transform: uppercase;">{{ $alumno->ap_materno }} </font></td>
                <td><font style="text-transform: uppercase;">{{ $alumno->ci  }} </font></td>
               
                <td>{{ $alumno->num_cel }}</td>
                
            </tr>
            @endforeach
        </tbody>
    
        
    </div>
</div>
</div>
