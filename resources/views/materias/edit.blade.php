@extends('layouts.app')


@section('content')
              <div class="card shadow">
            	<div class="card-header border-0">
            		<div class="row align-items-center">
            			<div class="col">
            				<h4 class="mb-0">Editar Materias </h4>
            			</div>
            			<div class="col text-right">

            				<a href="{{url('/materias')}}" class="btn btn-sm btn-success">Regresar</a>
            				<i class="fas fa-exclamation-triangle"></i>

            			</div>
            		</div>
            	</div>

            	<div class="card-body">
                    @if($errors->any())
                      @foreach ($errors->all() as $error)
                         <div class="alert alert-danger" role="alert">
                            <i class="fas fa-exclamation-triangle"></i>
                             <strong>Por favor!</strong>{{ $error }}
                         </div>
                      @endforeach
                    @endif
                  <form action="{{url('/materias/'.$materia->id)}}" method="POST">

            			@csrf
                  @method('PUT')
            			<div class="col-md-10">

                        <center><p style="color:navy;">Nombre de la Materia:</p></center>
                          <div class="form-group">
                            <input type="text" name="name" class="card-title form-control" value="{{ old('name', $materia->name)}}"required/>
                          </div>
                        </div>

                        <center><p style="color:navy;">Descripcion:</p></center>
                          <div class="form-group">
                            <input type="text" name="descripcion" class="card-title form-control" value="{{ old('descripcion', $materia->descripcion)}}" />
                          </div>
                        </div>

            			<div class="form-group">
            				<center>

          					<button type="submit" class="btn btn-sm btn-primary">Guardar Cambio</button>
            			    </center>

            			</div>

            		</form>
            	</div>


              </div>

@endsection
