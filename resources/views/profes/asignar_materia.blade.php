@extends('layouts.app')

@section('content')

@include('mensajes')



<div class="col-md-12 grid-margin stretch-card">
<div class="card">
    <div class="card-body">
    <h4 class="card-title text-center">LISTA DE PROFESORES  <strong>( {{ $profes->count() }} )</strong></h4>
    <div class="table-responsive">
        <table class="table table-hover">
        <thead>
            <tr>
            <th> </th>
            <th>Profesor</th>
            <th> </th>
            <th>Cédula</th>
            
            <th>Acción</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($profes as $profe)
            <tr>
               
                <td><font style="text-transform: uppercase;">{{ $profe->ap_paterno}}</td>
                <td><font style="text-transform: uppercase;">{{ $profe->ap_materno}}</td>
                <td><font style="text-transform: uppercase;">{{ $profe->nombres}}</td>
                <td><font style="text-transform: uppercase;">{{ $profe->ci }}</td>
               
                <td style="float: right">
                <form action="{{ route('profe.destroy', $profe->id) }}" method="POST">
                    <a class="btn btn-inverse-primary" href="{{ route('profe.show',$profe->id) }}"  style="padding: 8px 15px !important;" title="Ver Detalles">
                        <i class="mdi mdi-account-circle"></i> Ver datos del docente
                    </a>
                    <a class="btn btn-inverse-success" href="{{ route('curso.index',$profe->id) }}"  style="padding: 8px 5px !important;" title="Actualizar Registro">
                        <i class="mdi mdi-file-document-edit"></i>Asignar Materias
                    </a>


                  

                    <a class="btn btn-inverse-danger" href="{{ route('profe.edit',$profe->id) }}"  style="padding: 8px 5px !important;" title="Actualizar Registro">
                        <i class="mdi mdi-folder-search"></i>Ver Materias asignadas
                    </a>
                       
                        
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
@endsection

