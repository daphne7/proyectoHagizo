@extends('layouts.app')



@section('content')
              <div class="card shadow">
            	<div class="card-header border-0">
            		<div class="row align-items-center">
            			<div class="col">
            				<h4 class="mb-0">MATERIAS </h4>
            			</div>
            			<div class="col text-right">
            				<a href="{{url('/materias/create')}}" class="btn btn-sm btn-primary">Nueva Materia</a>

            			</div>
            		</div>
            	</div>

                <div class="card-body">
                    @if(session('notification'))

                    <div class="alert alert-success" role="alert">
                     {{ session('notification')}}
                    </div>
                    @endif
                </div>
            	<div class="table-resposive">
            		<table class="table aling-items-center table-flush">

            			<thead class="thead-light">
            				<tr>
            					<th scope="col">Nombre</th>
            					<th scope="col">Descripcion</th>
            					<th scope="col">Opciones</th>

            				</tr>
            			</thead>
                     <tbody>
                        @foreach($materias as $materia)
                     	<tr>
                     		<th scope="row">
                     			{{ $materia->name }}
                     		</th>
                     		<td>
                     			{{ $materia->descripcion }}
                     		</td>
                     		<td>

                              <form action="{{ url('/materias/'.$materia->id)}}" method="POST">
                               @csrf
                               @method('DELETE')
                               <a href="{{url('/materias/'.$materia->id.'/edit')}}"class="btn btn-sm btn-primary">Editar</a>
                               <button type="submit"class="btn btn-sm btn-danger">Eliminar</a>
                              </form>

                     		</td>

                     	</tr>
                        @endforeach

                     </tbody>

            		</table>
            	</div>
              </div>

@endsection
