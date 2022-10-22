<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Profesores;
use App\Models\Cursos;
use App\Models\Paise;
use App\Models\Departamento;
use App\Models\Provincia;
use App\Models\Municipio;
use Illuminate\Http\Request;
use PDF;
class ProfesoresController extends Controller
{

    public function index()
    {
        $profeTotal = Profesores::all();
        $profes = Profesores::orderBy('id', 'DESC')->paginate(6);
        return view('profes.asignar_materia', compact('profes','profeTotal'));
    }
    



    public function create()
    {
        $update =0;
        $cursos = Cursos::get();
        $profes = Profesores::orderBy('id', 'DESC')->paginate(6);
        return view('profes.addProfe', compact('profes','cursos','update'));
    }



      public function store(Request $request)
    {

        //return $request->all();
        if ($request->hasFile('foto_profesor')) {
            $file = $request->file('foto_profesor');  
            $nombrearchivo = time()."_".$file->getClientOriginalName();  
            $file->move(public_path('/fotosProfes/'),$nombrearchivo); 

            $data = new Profesores([

                'nombres'      =>$request->get('nombres'),
                'ap_paterno'   =>$request->get('ap_paterno'),
                'ap_materno'   =>$request->get('ap_materno'),
                'direccion'    =>$request->get('direccion'),
                'ci'           =>$request->get('ci'),
                'paise'         =>$request->get('paise'),
                'departamento' =>$request->get('departamento'),
                'provincia'    =>$request->get('provincia'),
                'municipio'    =>$request->get('municipio'),
                'num_cel'      =>$request->get('num_cel'),
                'email'        =>$request->get('email'),
                'fecha_nac'    =>$request->get('fecha_nac'),
                'genero'       =>$request->get('genero'),
                'estado_civil'  =>$request->get('estado_civil'),
                'profesion'    =>$request->get('profesion'),
                'rut'          =>$request->get('rut'),

                'foto_profesor'=>$nombrearchivo,
                'curso_id'     =>$request->get('curso_id')

            ]);
            $data->save(); 
        }else{
            $data = new Profesores([
               
                'nombres'      =>$request->get('nombres'),
                'ap_paterno'   =>$request->get('ap_paterno'),
                'ap_materno'   =>$request->get('ap_materno'),
                'direccion'    =>$request->get('direccion'),
                'ci'           =>$request->get('ci'),
                'paise'         =>$request->get('paise'),
                'departamento' =>$request->get('departamento'),
                'provincia'    =>$request->get('provincia'),
                'municipio'    =>$request->get('municipio'),
                'num_cel'      =>$request->get('num_cel'),
                'email'        =>$request->get('email'),
                'fecha_nac'    =>$request->get('fecha_nac'),
                'genero'       =>$request->get('genero'),
                'estado_civil'  =>$request->get('estado_civil'),
                'profesion'    =>$request->get('profesion'),
                'rut'          =>$request->get('rut'),

                'foto_profesor'=>$nombrearchivo,
                'curso_id'     =>$request->get('curso_id')


            ]);
            $data->save(); 
        }

        return redirect('/profe/create')->with('RegisterProfe','Profesor Guardado Satisfactoriamente');
    }

    public function show(Request $request, $id)
    {
        $prof = Profesores::findOrFail($id);
        return view('profes.view', compact('prof'));
    }


    public function edit($id)
    {
        $update =1;
        $profe = Profesores::findOrFail($id);
        $profeidCurso = $profe->curso_id;
        $cursos = Cursos::all();

        return view('profes.addProfe', compact('profe','cursos','update','profeidCurso'));  

    }


    public function update(Request $request, $id)
    {

        if ($request->hasFile('foto_profesor')) {
            $file = $request->file('foto_profesor');  
            $nombrearchivo = time()."_".$file->getClientOriginalName();  
            $file->move(public_path('/fotosProfes/'),$nombrearchivo); 

            $profe = Profesores::findOrFail($id);

            $profe->nombres         = $request->nombres;
            $profe->ap_paterno      = $request->ap_paterno;
            $profe->ap_materno      = $request->ap_materno;
            
            $profe->direccion       = $request->direccion;
            $profe->ci              = $request->ci;
            $profe->paise            = $request->paise;
            $profe->departamento    = $request->departamento;
            $profe->provincia       = $request->provincia;  
            $profe->municipio       = $request->municipio;
            $profe->num_cel         = $request->num_cel;
            $profe->email           = $request->email;
            $profe->fecha_nac       = $request->fecha_nac;  
            $profe->genero          = $request->genero;
            $profe->estado_civil    = $request->estado_civil;
            $profe->profesion       = $request->profesion;
            $profe->rut             = $request->rut;

            $profe->curso_id        = $request->curso_id;
            $profe->foto_profesor   = $nombrearchivo;


            $profe->save();
        }else{
            $profe = Profesores::findOrFail($id);

            $profe->nombres         = $request->nombres;
            $profe->ap_paterno      = $request->ap_paterno;
            $profe->ap_materno      = $request->ap_materno;
            
            $profe->direccion       = $request->direccion;
            $profe->ci              = $request->ci;
            $profe->paise            = $request->paise;
            $profe->departamento    = $request->departamento;
            $profe->provincia       = $request->provincia;  
            $profe->municipio       = $request->municipio;
            $profe->num_cel         = $request->num_cel;
            $profe->email           = $request->email;
            $profe->fecha_nac       = $request->fecha_nac;  
            $profe->genero          = $request->genero;
            $profe->estado_civil    = $request->estado_civil;
            $profe->profesion       = $request->profesion;
            $profe->rut             = $request->rut;

            $profe->curso_id        = $request->curso_id;
            $profe->save();
        }
        
        $update = 0;
        $cursos = Cursos::get();
        $profes = Profesores::orderBy('id', 'DESC')->paginate(3);
        return view('profes.addProfe', compact('profes','cursos','update'));

    }

    public function destroy(Profesores $profesores, $id){

        $profes = Profesores::findOrFail($id);
        $profes->delete($id);

        $update =0;
        $cursos = Cursos::get();
        $profes = Profesores::orderBy('id', 'DESC')->paginate(6);

        $successDelete ="Sede Borrada correctamente.";
        return view('profes.addProfe', compact('successDelete','profes','cursos','update'));
    }

}