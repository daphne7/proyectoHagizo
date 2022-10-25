<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

//use App\Http\Controllers\Request;
use App\Models\Materia;
use App\Http\Requests\StoreMateriaRequest;
use App\Http\Requests\UpdateMateriaRequest;


class MateriaController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');

    }

    public function index()
    {
        $materias = Materia::all();
        return view('materias.index' , compact('materias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('materias.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreMateriaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMateriaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Materia  $materia
     * @return \Illuminate\Http\Response
     */
    public function show(Materia $materia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Materia  $materia
     * @return \Illuminate\Http\Response
     */
    public function edit(Materia $materia)
    {
        return view('materias.edit', compact('materia'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMateriaRequest  $request
     * @param  \App\Models\Materia  $materia
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, Materia $materia)
    {
          $rules = [
         'name' => 'required|min:3'
        ];
        $messages = [
           'name.required' => 'El nombre de la materia es obligatorio.',
           'name.min'      => 'El nombre de la de la materia debe tener mas de 3 caracteres.'
        ];
        $this->validate($request, $rules, $messages);
        $materia->name        = $request->input('name');
        $materia->descripcion = $request->input('descripcion');
        $materia->save();
        $notification = 'la materia se ha actualizado correctamente.';
        return redirect('/materias')->with(compact('notification'));
    }



     public function sendData(Request $request)
    {
        $rules = [
         'name' => 'required|min:3'
        ];
        $messages = [
           'name.required' => 'El nombre de la materia es obligatorio.',
           'name.min' => 'el nombre de la de la materia debe tener mas de 3 caracteres.'
        ];
        $this->validate($request, $rules, $messages);

        $materia = new Materia();
        $materia->name        = $request->input('name');
        $materia->descripcion = $request->input('descripcion');
        $materia->save();
        $notification = 'la materia ha sido creado correctamente.';

        return redirect('/materias')->with(compact('notification'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Materia  $materia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Materia $materia)
    {
        $deleteName = $materia->name;
        $materia->delete();
        $notification = 'la materia '. $deleteName .' ha sido eliminado corecctamente';
        return redirect('/materias')->with(compact('notification'));

    }
}
