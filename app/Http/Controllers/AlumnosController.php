<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Alumnos;
use App\Models\Cursos;
use App\Models\Profesores;
use App\Models\paise;
use App\Models\departamento;
use App\Models\provincia;
use App\Models\municipio;
use PDF;

class AlumnosController extends Controller
{
    
    public function index()
    {
        $alumnosTotal = Alumnos::all();
        $alumnos = Alumnos::orderBy('id', 'DESC')->paginate(6);
        return view('alumnos.index', compact('alumnos','alumnosTotal'));

    }

    public function alumpdf()
    {
        $alumnosTotal = Alumnos::all();
        $alumnos = Alumnos::orderBy('id', 'DESC')->paginate(6);
        $alumpdf = PDF::loadView('alumnos.alumpdf',['alumnos'=> $alumnos]);
        
        return $alumpdf->stream();
    }

    public function create()
    {
        $cursos = Cursos::get();
        #$user = User::where('name', 'John')->first();
        #$cursos = Cursos::all();
        $profesores = Profesores::orderBy('id','asc')->get();
        //$alumnos = Alumnos::orderBy('id', 'DESC')->paginate(3);

        
        return view('alumnos.add',compact('cursos','profesores'));

    }

    
    public function store(Request $request)
    {

        /*
            return $request('nameFullAlumno');
            return $request->all();
        */

        if ($request->hasFile('foto_estudiante')) {
            $file = $request->file('foto_estudiante');  
            $nombrearchivo = time()."_".$file->getClientOriginalName();  
            $file->move(public_path('/fotosAlumnos/'),$nombrearchivo); 

            $data = new Alumnos([


           'nombres'   =>$request->get('nombres'),
           'ap_paterno'=>$request->get('ap_paterno'),
           'ap_materno'=>$request->get('ap_materno'),
           'direccion'   =>$request->get('direccion'),
           'paise'       =>$request->get('paise'),
           'departamento'=>$request->get('departamento'),
           'provincia'   =>$request->get('provincia'),
           'municipio'   =>$request->get('municipio'),
           'num_cel'   =>$request->get('num_cel'),

           'fecha_nac' =>$request->get('fecha_nac'),
    

           'genero'       =>$request->get('genero'),
           'estado_civil' =>$request->get('estado_civil'),
           'nom_tutor'    =>$request->get('nom_tutor'), //Nombre del padre o tutor
           'num_cel_tutor'=>$request->get('num_cel_tutor'),
           'llam_urg'     =>$request->get('llam_urg'), //Llamar en caso de urgencia
           'num_cel_urg'  =>$request->get('num_cel_urg'),
           'iglesia'      =>$request->get('iglesia'), 
           'loc_igl'      =>$request->get('loc_igl'), //lugar de la iglesia
           'pastor'       =>$request->get('pastor'), //aqui nombre completo
          
           'fecha_acept'  =>$request->get('fecha_acept'),//Cuándo aceptó usted a Cristo como Salvador personal
           'preg_baut'    =>$request->get('preg_baut'),//¿Es bautizado por inmersión?  
           
           'fecha_baut'     =>$request->get('fecha_baut'),//cuando se bautizo
           'cargo_est'      =>$request->get('cargo_est'), //Qué cargos o responsabilidades ha desempeñado en su iglesia
           'menor_edad'     =>$request->get('menor_edad'),//¿En caso de ser menor de edad, sus padres están de acuerdo en que estudie en el seminario?
           'nivel_acad'     =>$request->get('nivel_acad'),
           'nivel_acaddos'  =>$request->get('nivel_acaddos'), //por si tiene otro nivel academico
           'mod_pago'       =>$request->get('mod_pago'),
           'afir_conf'      =>$request->get(''),
           'testimonio_conv'=>$request->get('testimonio_conv'),
           'testimonio_serv'=>$request->get('testimonio_serv'),
           'razon_est'      =>$request->get('razon_est'),
           
           'fecha_test'     =>$request->get('fecha_test'),

           'foto_estudiante'=>$nombrearchivo,
           
           'email'          =>$request->get('email'),

           'observ'         =>$request->get('observ'),
           'curso_id'       =>$request->get('curso_id'),
  

            'foto_estudiante'=>$nombrearchivo,
            'observ'         =>$request->get('observ'),
            'curso_id'       =>$request->get('curso_id'),
            'profesor_id'    =>$request->get('profesor_id')
                 

            ]);
            $data->save(); 
        }else{
            $data = new Alumnos([

           'nombres'   =>$request->get('nombres'),
           'ap_paterno'=>$request->get('ap_paterno'),
           'ap_materno'=>$request->get('ap_materno'),
           'direccion'   =>$request->get('direccion'),
           'paise'       =>$request->get('paise'),
           'departamento'=>$request->get('departamento'),
           'provincia'   =>$request->get('provincia'),
           'municipio'   =>$request->get('municipio'),
           'num_cel'   =>$request->get('num_cel'),
           'fecha_nac' =>$request->get('fecha_nac'),
           //'foto_estud=>$nombrearchivo,

           'genero'       =>$request->get('genero'),
           'estado_civil' =>$request->get('estado_civil'),
           'nom_tutor'    =>$request->get('nom_tutor'), //Nombre del padre o tutor
           'num_cel_tutor'=>$request->get('num_cel_tutor'),
           'llam_urg'     =>$request->get('llam_urg'), //Llamar en caso de urgencia
           'num_cel_urg'  =>$request->get('num_cel_urg'),
           'iglesia'      =>$request->get('iglesia'), 
           'loc_igl'      =>$request->get('loc_igl'), //lugar de la iglesia
           'pastor'       =>$request->get('pastor'), //aqui nombre completo
          
           'fecha_acept'  =>$request->get('fecha_acept'),//Cuándo aceptó usted a Cristo como Salvador personal
           'preg_baut'    =>$request->get('preg_baut'),//¿Es bautizado por inmersión?  
           
           'fecha_baut'   =>$request->get('fecha_baut'),//cuando se bautizo
           'cargo_est'    =>$request->get('cargo_est'), //Qué cargos o responsabilidades ha desempeñado en su iglesia
           'menor_edad'   =>$request->get('menor_edad'),//¿En caso de ser menor de edad, sus padres están de acuerdo en que estudie en el seminario?
           'nivel_acad'   =>$request->get('nivel_acad'),
           'mod_pago'     =>$request->get('mod_pago'),
           'afir_conf'    =>$request->get(''),
           'testimonio_conv'=>$request->get('testimonio_conv'),
           'testimonio_serv'=>$request->get('testimonio_serv'),
           'razon_est'      =>$request->get('razon_est'),
           
           'fecha_test'     =>$request->get('fecha_test'),

          // 'foto_estudiante'=>$nombrearchivo,
           //'foto_estudiante'=>$request->get('foto_estudiante'),
           'email'          =>$request->get('email'),

           'observ'         =>$request->get('observ'),
           'curso_id'       =>$request->get('curso_id'),
          // 'profesor_id'=>$request->get('profesor_id'),

              //  'foto_estudiante'=>$nombrearchivo,
                'observ'     =>$request->get('observ'),
                'curso_id'   =>$request->get('curso_id'),
                'profesor_id'=>$request->get('profesor_id')
                 

                 
            ]);
            $data->save(); 
        } 

        return redirect('/alumno')->with('mensaje','Alumno Registrado Correctamente.');

    }

    
    public function show(Request $request, $id){

      $alumno = Alumnos::findOrFail($id);
      $idp    = $alumno->paise;
      $idDep  = $alumno->departamento;
      $idPro  = $alumno->provincia;
      $idmun  = $alumno->municipio; 

       $pais = paise::       findOrFail($idp);
       $dep  = departamento::findOrFail($idDep);
       $pro  = provincia::   findOrFail($idPro);
       $mun  = municipio::   findOrFail($idmun); 

       $pais = $pais;
       $dept = $dep;
       $pro = $pro;
       $mun = $mun; 
      return view('alumnos.view', compact('alumno','pais','dept','pro','mun'));
    }

    

    
    public function edit($id){

        $alumno   = Alumnos::findOrFail($id);
        $cursos   = Cursos::get();
        $profesores = Profesores::orderBy('id','asc')->get();

        $CursoAsignadoBD = $alumno->curso_id;
        $ProfeAsignadoBD = $alumno->profesor_id;

        return view('alumnos.update',compact('alumno','cursos','profesores','CursoAsignadoBD','ProfeAsignadoBD'));
    }


    public function update(Request $request, $id)
    {
  
        if ($request->hasFile('foto_estudiante')) {
            $file = $request->file('foto_estudiante');  
            $nombrearchivo = time()."_".$file->getClientOriginalName();  
            $file->move(public_path('/fotosAlumnos/'),$nombrearchivo); 

            $alumno = Alumnos::findOrFail($id);

            $alumno->nombres                = $request->nombres;
            $alumno->ap_paterno             = $request->ap_paterno;
            $alumno->ap_materno             = $request->ap_materno;
            $alumno->direccion              = $request->direccion;
            $alumno->ci                     = $request->ci;
            $alumno->paise                  = $request->paise;
            $alumno->departamento           = $request->departamento;
            $alumno->provincia              = $request->provincia;
            $alumno->municipio              = $request->municipio;
            $alumno->num_cel                = $request->num_cel;

            $alumno->fecha_nac              = $request->dateTime;
            $alumno->genero                 = $request->genero;
            $alumno->estado_civil           = $request->estado_civil;
            $alumno->nom_tutor              = $request->nom_tutor;
            $alumno->num_cel_tutor          = $request->num_cel_tutor;
            $alumno->llam_urg               = $request->llam_urg;
            $alumno->num_cel_urg            = $request->num_cel_urg;
            $alumno->iglesia                = $request->iglesia;
            $alumno->loc_igl                = $request->loc_igl;
            $alumno->pastor                 = $request->pastor;

            $alumno->fecha_acept            = $request->fecha_acept;
            $alumno->preg_baut              = $request->fecha_baut;
            $alumno->cargo_est              = $request->cargo_est;
            $alumno->menor_edad             = $request->menor_edad;
            $alumno->nivel_acad             = $request->nivel_acad;
            $alumno->mod_pago               = $request->mod_pago;
            $alumno->afir_conf              = $request->afir_conf;
            $alumno->testimonio_conv        = $request->testimonio_conv;
            $alumno->testimonio_serv        = $request->testimonio_serv;
            $alumno->razon_est              = $request->razon_est;
            $alumno->afir_conf              = $request->afir_conf;
            $alumno->fecha_test             = $request->fecha_test;
            
            //$alumno->ciudad                  = $request->ciudad;
            $alumno->foto_estudiante        = $request->$nombrearchivo;
            $alumno->observ                 = $request->observ;
            $alumno->curso_id               = $request->curso_id;
           // $alumno->profesor_id            = $request->profesor_id; 


           

            $alumno->save(); 
        }else{
            $alumno = Alumnos::findOrFail($id);

            $alumno->nombres                = $request->nombres;
            $alumno->ap_paterno             = $request->ap_paterno;
            $alumno->ap_materno             = $request->ap_materno;
            $alumno->direccion              = $request->direccion;
            $alumno->ci                     = $request->ci;
            $alumno->paise                  = $request->paise;
            $alumno->departamento           = $request->departamento;
            $alumno->provincia              = $request->provincia;
            $alumno->municipio              = $request->municipio;
            $alumno->num_cel                = $request->num_cel;
            $alumno->fecha_nac              = $request->fecha_nac;
            $alumno->genero                 = $request->genero;
            $alumno->estado_civil           = $request->estado_civil;
            $alumno->nom_tutor              = $request->nom_tutor;
            $alumno->num_cel_tutor          = $request->num_cel_tutor;
            $alumno->llam_urg               = $request->llam_urg;
            $alumno->num_cel_urg            = $request->num_cel_urg;
            $alumno->iglesia                = $request->iglesia;
            $alumno->loc_igl                = $request->loc_igl;
            $alumno->pastor                 = $request->pastor;
            $alumno->fecha_acept            = $request->fecha_acept;
            $alumno->preg_baut              = $request->fecha_baut;
            $alumno->cargo_est              = $request->cargo_est;
            $alumno->menor_edad             = $request->menor_edad;
            $alumno->nivel_acad             = $request->nivel_acad;
            $alumno->mod_pago               = $request->mod_pago;
            $alumno->afir_conf              = $request->afir_conf;
            $alumno->testimonio_conv        = $request->testimonio_conv;
            $alumno->testimonio_serv        = $request->testimonio_serv;
            $alumno->razon_est              = $request->razon_est;
            $alumno->afir_conf              = $request->afir_conf;
            $alumno->fecha_test             = $request->fecha_test;
            $alumno->observ                 = $request->observ;
            $alumno->curso_id               = $request->curso_id;
           // $alumno->profesor_id            = $request->profesor_id; 

            $alumno->save(); 
        } 

            $updateAlumno ="Alumno actualizado Correctamente";
        return redirect('alumno/')->with(['updateAlumno' => $updateAlumno]);
    }



    public function destroy(Request $request, $id){
        $alumno = Alumnos::findOrFail($id);
        $alumno->delete();
        return redirect('/alumno')->with('mensaje', 'El alumno fue borrado correctamente.');
    }




    

}
