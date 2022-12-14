@extends('layouts.app')

@section('content')
        
@if ( session('updateAlumno') )
<div class="row re" id="proBanner">
    <div class="col-md-12 grid-margin">
      <div class="card bg-gradient-primary border-0">
        <div class="card-body py-3 px-4 d-flex align-items-center justify-content-between flex-wrap">
          <p class="mb-0 text-white font-weight-medium" style="margin: 0 auto;">
            <strong>Felicitaciones !</strong>
            {{ session('updateAlumno') }}
          </p>
          
          <div class="d-flex">
            <button id="bannerClose" class="btn border-0 p-0">
              <i class="mdi mdi-close text-white"></i>
            </button>
          </div>
        </div>
      </div>
    </div>
    </div>
@endif

@if ( session('mensaje') )
<div class="row re" id="proBanner">
    <div class="col-md-12 grid-margin">
      <div class="card bg-gradient-primary border-0">
        <div class="card-body py-3 px-4 d-flex align-items-center justify-content-between flex-wrap">
          <p class="mb-0 text-white font-weight-medium" style="margin: 0 auto;">
            <strong>Felicitaciones !</strong>
            {{ session('mensaje') }}
          </p>
          
          <div class="d-flex">
            <button id="bannerClose" class="btn border-0 p-0">
              <i class="mdi mdi-close text-white"></i>
            </button>
          </div>
        </div>
      </div>
    </div>
    </div>
@endif


@if(!empty($alumnos))
<div class="col-md-12 grid-margin stretch-card">
<div class="card">
    <div class="card-body">
    <h4 class="card-title text-center">LISTA DE ALUMNOS  
        <strong>( {{ $alumnos->count() }} )</strong>   
     
                    
     <a href="{{ route('alumnos.alumpdf') }}" class="btn btn-inverse-danger"data-placement="left"
     target='_blank'>
        <i class="mdi mdi-note-text"></i>{{__('PDF')}}
     </a>  
    </h4>

    <div class="table-responsive" col-md-6.5>
        <table id="datatables-example" class="table table-hover">
        <thead>
            <tr>
            <th>N??</th>
            
            <th>Apellido Paterno</th>
            <th>Apellido Materno</th>
            <th>Nombre del Alumno</th>
            <th>carnet de identidad</th>
            <th>Correo Electronico</th>
            <th>Numero de Celular</th>
            <th>Accion</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($alumnos as $alumno)
            <tr>
                <td><font style="text-transform: uppercase;">{{ $alumno->count()}} </font></td>
                <td><font style="text-transform: uppercase;">{{ $alumno->ap_paterno  }} </font></td>
                <td><font style="text-transform: uppercase;">{{ $alumno->ap_materno }} </font></td>
                <td><font style="text-transform: uppercase;">{{ $alumno->nombres }} </font></td>
                <td><font style="text-transform: uppercase;">{{ $alumno->ci  }} </font></td>
                <td><font style="text-transform: uppercase;">{{ $alumno->email }} </font></td>
                <td>{{ $alumno->num_cel }}</td>
                

                <td style="float: right">
                    <form action="{{ route('alumno.destroy',$alumno->id) }}" method="POST">
                        <a class="btn btn-inverse-primary" href="{{ route('alumno.show',$alumno->id) }}" 
                            style="padding: 8px 15px !important;" title="Ver Detalles">
                            <i class="mdi mdi-account-card-details"></i> Ver
                        </a>
                        <a class="btn btn-inverse-success" href="{{ route('alumno.edit',$alumno->id) }}"  style="padding: 8px 5px !important;" title="Actualizar Registro">
                            <i class="mdi mdi-autorenew"></i>Actualizar
                        </a>
                        @csrf
                        
                        @method('DELETE')
                        <button type="submit" class="btn btn-inverse-danger" onclick="return confirm('Estas seguro que deseas borrar el alumno: {{ $alumno->nameFullAlumno }} ?');"  style="padding:  8px 5px !important;" title="Borrar Alumno">
                            <i class="mdi mdi-delete-sweep"></i>Borrar
                        </button>
                        
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
        </table>

        <br><br>
        <div class="form-group text-center mt5">
            {!! $alumnos->links() !!}
        </div>

        </div>



    </div>
</div>
</div>
@else
<p> No se han creado Alumnos </p>
@endif

@endsection
