<?php

namespace App\Http\Controllers;

use App\Eloquent\Entities\Persona;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PersonaController extends Controller
{
    use ApiResponser;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() { }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $persona = Persona::with('idTipoDocumento')->get(); // esto es para llamar otra tabla relacionada
        // $persona = Persona::all(); // esto es para listar todo de la tabla
        return $this->successResponse($persona);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $rules = [
            'nombre' => 'required|max:255',
            'idusuario' => 'required',
            'idTipoDocumento' => 'required',
            'ap_paterno' => 'required|max:255',
            'ap_materno' => 'required|max:255',
            'direccion' => 'required|max:255',
            'email' => 'required|max:255',
            'foto' => 'required|max:255',
            'fecha_nacimiento' => 'required',
            'num_documento' => 'required',
            'sexo' => 'required|max:1|in:1,0',
            'n_celular' => 'required|max:9',
            'estado' => 'required|max:1|in:1,0',
        ];
        $this->validate($request, $rules);
        $persona = Persona::create($request->all());
        return $this->successResponse($persona, Response::HTTP_CREATED);
    }
        
    /**
     * Display the specified resource.
     *
     * @param  int  $persona
     * @return \Illuminate\Http\Response
     */
    public function show($idPersona) {
        $persona = Persona::findOrFail($idPersona);
        return $this->successResponse($persona);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idPersona) {
        $rules = [
            'nombre' => 'required|max:255',
            'idusuario' => 'required',
            'idTipoDocumento' => 'required',
            'ap_paterno' => 'required|max:255',
            'ap_materno' => 'required|max:255',
            'direccion' => 'required|max:255',
            'email' => 'required|max:255',
            'foto' => 'required|max:255',
            'fecha_nacimiento' => 'required',
            'num_documento' => 'required',
            'sexo' => 'required|max:1|in:1,0',
            'n_celular' => 'required|max:9',
            'estado' => 'required|max:1|in:1,0',
        ];
        $this->validate($request, $rules);
        $persona = Persona::findOrFail($idPersona);
        $persona->fill($request->all());
        if ($persona->isClean()) {
            return $this->errorResponse('At least one value must change', Response::HTTP_UNPROCESSABLE_ENTITY);
        }
        $persona->save();
        return $this->successResponse($persona);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($idPersona) {
        $persona = Persona::findOrFail($idPersona);
        $persona->delete();
        return $this->successResponse($persona);
    }
}
