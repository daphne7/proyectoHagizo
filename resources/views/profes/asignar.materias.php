@extends('layouts.app')

@section('content')

@include('mensajes')

<div class="row justify-content-center">
    @if ($update !=0)
    <div class="col-md-10 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
            <h1 class="card-title text-center">ACTUALIZAR DATOS DEL PROFESOR <hr></h1>
            <form class="forms-sample" method="post" action="{{ route('profe.update', $profe->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
            <div class="row mb-3">
                 <div class="col-md-6">
                        <label for="exampleInputUsername1">Nombres</label>
                        <input type="text" name="nombres" class="card-title form-control" value="{{ $profe->nombres }}" required>
                    </div>

                     <div class="col-md-6">
                        <label for="exampleInputUsername1">Apellido Paterno</label>
                        <input type="text" name="ap_paterno" class="card-title form-control" value="{{ $profe->ap_paterno }}" required>
                    </div>
              </div>       
             
           <div class="row  mb-5">
                    <div class="col-md-6">
                        <label for="exampleInputUsername1" style="text-align: center;">Foto actual</label>
                        <br>
                        @if ($profe->foto_profesor !=NULL)
                            <img src="/fotosProfes/{{ $profe->foto_profesor }}" alt="foto profe" style="max-width: 100px; margin: 0 auto;">
                        @else
                            <img class="card-img-top" src="{{ asset('images/users.png') }}" alt="Foto-Profe" class="imgs" style="width:100px; margin: 0 auto;">
                        @endif
                        
                    </div>
                    <div class="col-md-6">
                        <label for="exampleInputUsername1">Cambiar Foto del Profesor</label>
                        <input type="file" name="foto_profesor" class="form-control">
                    </div>
                </div>
    
                
                <div class="form-group text-center">
                    <button type="submit" class="card-title btn btn-primary mr-2 mb-3">Actualizar Datos</button>
                    <a href="/"  class="card-title btn btn-inverse-dark btn-fw mb-3">Cancelar</a>
                </div>
            </form>
            </div>
        </div>
    </div>



<!-- //////////////////////////////////registro//////////////////////////////////////////////////////////////////// -->



    
    @else
    <div class="col-md-4 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
        <h4 class=" style="color:navy;" card-title text-center">ASIGNAR MATERIAS <hr></h4>
        <form class="forms-sample" method="post" action="{{ route('profe.store') }}" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                 <p style="color:navy;"> NOMBRES:</p>
                <input type="text" name="nombres" class="card-title form-control" required>
            </div>

            <div class="form-group">
                <label style="color:navy;">Apellido Paterno</label>
                <input type="text" name="ap_paterno" class="card-title form-control" required>
            </div>
            


            <div class="form-group text-center">
                <button type="submit" class="btn btn-primary mr-2 mb-3">Registrar</button>
                <a href="/"  class="btn btn-inverse-dark btn-fw mb-3">Cancelar</a>
            </div>
        </form>
        </div>
    </div>
</div>


@if($profes->count())
<div class="col-md-8 grid-margin stretch-card">
<div class="card">
    <div class="card-body">
    <h4 class="card-title text-center">LISTA DE PROFESORES  <strong>( {{ $profes->count() }} )</strong></h4>
    <div class="table-responsive">
        <table class="table table-hover">
        <thead>
            <tr>
        
            <th>Docente</th>
            <th>Apellido</th>  
            <th>Cédula</th>
            <th>Teléfono</th>
            <th>Acción</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($profes as $profe)
            <tr>
                <td><h6><font style="text-transform: uppercase;">{{ $profe->nombres }}</font></h6></td>
                <td><h6><font style="text-transform: uppercase;">{{ $profe->ap_paterno }}</font></h6></td>
                <td><h6>{{ $profe->ci }}</h6></td>  
                <td><h6>{{ $profe->num_cel }}</h6></td>

                <td style="float: right">
                    <form action="{{ route('profe.destroy', $profe->id) }}" method="POST">
                        <a class="btn btn-inverse-primary" href="{{ route('profe.show',$profe->id) }}"  style="padding: 8px 15px !important;" title="Ver Detalles">
                            <i class="mdi mdi-account-card-details"></i> Ver
                        </a>
                        <a class="btn btn-inverse-success" href="{{ route('profe.edit',$profe->id) }}"  style="padding: 8px 5px !important;" title="Actualizar Registro">
                            <i class="mdi mdi-autorenew"></i>Actualizar
                        </a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-inverse-danger"  style="padding:  8px 5px !important;" title="Borrar Alumno">
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
            {!! $profes->links() !!}
        </div>
           
        </div>
    </div>
</div>
</div>

@else
<p> No se ha creado ningún Profesor </p>
@endif  <!----->

@endif <!--FIN DEL UPDATE--->



</div>
@endsection