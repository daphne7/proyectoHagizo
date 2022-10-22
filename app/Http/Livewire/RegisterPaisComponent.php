<?php

namespace App\Http\Livewire;
use App\Models\Paise;
use App\Models\Departamento;
use App\Models\Provincia;
use App\Models\Municipio;
use Livewire\Component;

class RegisterPaisComponent extends Component
{
  public $listarPaises        = null,
         $listarDepartamentos = null,
         $listarProvincias    = null,
         $listarMunicipios    = null;

  public $departamentos = null, 
         $provincias    = null,
         $municipios    = null;

  public function render()
   {
     return view('livewire.register-pais-component',[
           "paises" => Paise::all(),
      
     ]);
   }

     public function mount( )
   {
       $this->departamentos = Departamento::where("paise_id", 1)->get();
       $this->provincias    = Provincia::   where("departamento_id", 1)->get();
       $this->municipios    = Municipio::   where("provincia_id", 1)->get();
    }

   public function updatedlistarPaises($paise_id)
   {
     $this->departamentos = Departamento::where('paise_id',$paise_id)->get();
   }

  
   public function updatedlistarDepartamentos($departamento_id)
   {
     $this->provincias = Provincia::where('departamento_id',$departamento_id)->get();
   }

     public function updatedlistarProvincias($provincia_id)
     {
      $this->municipios = Municipio::where('provincia_id',$provincia_id)->get();
     }
  

}
