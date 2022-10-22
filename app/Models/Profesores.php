<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Paise;
use App\Models\Departamento;
use App\Models\Provincia;
//use App\Models\Municipio;
class Profesores extends Model
{
    use HasFactory;

    protected $fillable = [
        
       'nombres',
        'ap_paterno',
        'ap_materno',
        'direccion', //direccion actual
        'ci',
        'pais',
        'departamento',
        'provincia',
        'municipio',
        'num_cel',
        'email',
        'fecha_nac',
        'genero',
        'estado_civil',

        'profesion',
        'rut', //preguntar rut N
        'foto_profesor',

    ];

    protected $table = "profesores";
    protected $primaryKey = "id";


    /**RELACION DE 1 A MUCHOS, un profe puede tener mas de una materia (curso)*/
    public function curso(){
        return $this->belongsTo(Cursos::class);
    }

}
