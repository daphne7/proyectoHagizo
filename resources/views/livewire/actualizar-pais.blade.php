<div>
   {{$alumnoid}}
   {{$p}}
   <div>
    <tr>
     <th>
      <div class="row">

        <div class="col-md-6">
           <p style="color:navy;"> PAIS:</p>
            <!--<select wire:model="listarPaises" class="form-control"> -->
             
            <select class="card-title form-control"required name="paise" wire:model="listarPaises">  
             <option value="">Seleccionar Pais</option>      
                    <!-- @if ($paises) -->
                    
                        @foreach($paises as $paise)
                        <option value="{{$paise->id}}">{{$paise->name}}</option>
                        @endforeach
                    <!--  @endif -->
            </select>
         </div>
         

          @if(!is_null($departamentos))

          <div class="col-md-6">
       
           <p style="color:navy;"> DEPARTAMENTO:</p>
             
            <select class="card-title form-control"required  name="departamento" wire:model="listarDepartamentos">  
           <!-- <select wire:model="listarDepartamentos" class="form-control">  -->
            <option value="">Departamento</option>

                    @if ($departamentos)
                        @foreach($departamentos as $departamento)
                        <option value="{{$departamento->id}}">{{$departamento->name}}</option>
                        @endforeach
                    @endif 
            </select>
         </div>

          @endif


          @if(!is_null($provincias))
         <div class="col-md-6">
           <p style="color:navy;">PROVINCIA:</p>
             
            <select class="card-title form-control" required name="provincia" wire:model="listarProvincias"> 
            <option value="">provincia</option> 
           <!-- <select wire:model="listarProvincias" class="form-control"> -->
                   @if ($provincias)
                        @foreach($provincias as $provincia)
                        <option value="{{$provincia->id}}">{{$provincia->name}}</option>
                        @endforeach
                      @endif
            </select>
         </div>
         @endif

          @if(!is_null($municipios))
         <div class="col-md-6">
           <p style="color:navy;">MUNICIPIO:</p>
             
            <select class="card-title form-control"required  name="municipio" wire:model="listarMunicipios"> 
            <option value="">municipio</option> 
           <!-- <select wire:model="listarProvincias" class="form-control"> -->
                   @if ($municipios)
                        @foreach($municipios as $municipio)
                        <option value="{{$municipio->id}}">{{$municipio->name}}</option>
                        @endforeach
                      @endif
            </select>
         </div>
         @endif   
     </th>
    </tr>
</div>
</div>

</div>
