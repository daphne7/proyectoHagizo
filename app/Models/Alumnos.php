<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Cursos;
use App\Models\Profesores;

class Alumnos extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombres',
        'ap_paterno',
        'ap_materno',
        'direccion',
        'ci',
        'num_cel',
        'paise',
        'departamento',
        'provincia',
        'municipio',
        'fecha_nac',
        'genero',
        'estado_civil',
        'nom_tutor', //Nombre del padre o tutor
        'num_cel_tutor',
        'llam_urg', //Llamar en caso de urgencia
        'num_cel_urg',
        'iglesia', 
        'loc_igl', //lugar de la iglesia
        'pastor', //aqui nombre completo
        'fecha_acept',//Cuándo aceptó usted a Cristo como Salvador personal
        'preg_baut',//¿Es bautizado por inmersión?  
        'fecha_baut',//cuando se bautizo
        'cargo_est', //Qué cargos o responsabilidades ha desempeñado en su iglesia
        'menor_edad',//En caso de ser menor de edad, sus padres están de acuerdo en que estudie en el seminario
               
               //informacion academica
        'nivel_acad',//Indique todos los niveles logrados con un √
                    // Primaria                                                                                                                                                         
                    // Secundario
                    //bachiller
                    //universidad
                    //licenciatura
                    //otra especialidad
         'nivel_acaddos',//por si tiene otro nivel

        'mod_pago',//MODALIDAD DE PAGO  
                   //• Mensual 150 Bs 
                   //• Por 5 pagos de febrero a junio,
                   // se le descuenta un mes, de manera que; cancelaria simplemente bs 600/ semestral 
                   //• Por 10 pagos de febrero a diciembre, solo cancelaria la suma de 
                   //Bs 1200/ anual, (es decir menos dos mensualidades).

        //• El pago mensual y/o anual, incluye biblioteca física,
        // virtual, internet, consejería y acceso a las 20 materias del curso.
        'afir_conf',// poner en modo fecha  Afirmación de Conformidad
                    
                    //Habiendo leído previamente la Declaración de Fe  y los Requisitos y Normas incluidos en este Boletín Informativo
                    // para inscribirme en el SEMINARIO TEOLOGICO HAGIAZO 
                    //, afirmo mi conformidad doctrinal y prometo guardar fielmente las normas establecidas por la Seminario Teológico Hagiazo.


             //TESTIMONIO PERSONAL
        //Por favor, escribe el testimonio breve de tu vida cristiana: 

        'testimonio_conv',//Testimonio de su conversión a Cristo:
        'testimonio_serv',//Testimonio de tu servicio cristiano
        'razon_est',//La razón por la cual quieres estudiar en el Seminario Teológico Hagiazo:
        'fecha_test',//TESTIMONIO PERSONAL

        'foto_estudiante',
        'email', //opcional

        'observ',
        'curso_id'
        //'profesor_id'
    ];

    /** un alumno puede tener mas de 1 curso*/
    public function curso(){
        return $this->belongsTo(Cursos::class);
    }

    public function profesor(){
        return $this->belongsTo(Profesores::class);
    }

}
