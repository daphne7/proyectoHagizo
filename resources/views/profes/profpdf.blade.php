
<div class="card">
    <div class="card-body">
        
        <link  href="{{ public_path('css/app.css') }}" rel="stylesheet" type="text/css">

    <table class="table table-hover">
        <thead>
    <tr>
        <center><img src="{{ public_path('images/faces/Logohoja.png') }}"
                         width="700" height="130" alt="InternetCtrl"></center>
    <br>

    <h4 class="card-title text-center">LISTA DE PROFESORES </h4>  
      </tr>
     </thead>
    </table>
    <div class="table-responsive">
        <table class="table table-hover">
        <thead>
            <tr>
        
            <th>Docente</th>
            <th>Apellido</th>  
            <th>Cédula</th>
            <th>Teléfono</th>
           
            </tr>
        </thead>
        <tbody>
            @foreach ($profes as $profe)
            <tr>
                <td><h6><font style="text-transform: uppercase;">{{ $profe->nombres }}</font></h6></td>
                <td><h6><font style="text-transform: uppercase;">{{ $profe->ap_paterno }}</font></h6></td>
                <td><h6>{{ $profe->ci }}</h6></td>  
                <td><h6>{{ $profe->num_cel }}</h6></td>

                
            </tr>
            @endforeach
        </tbody>
    
        
    </div>
</div>
</div>
