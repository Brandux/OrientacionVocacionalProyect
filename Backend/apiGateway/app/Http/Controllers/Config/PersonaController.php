<?php

namespace App\Http\Controllers\Config;

use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use App\Services\PersonaService;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;

class PersonaController extends Controller
{
    use ApiResponser;
     /**
     * The service to consume the author service
     * @var PersonaService
     */
    public $personaService;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(PersonaService $personaService)
    {
        $this->personaService = $personaService;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return $this->successResponse($this->personaService->obtainPersonas());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)  {
        return $this->successResponse($this->personaService->createPersona($request->all()), Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $idPersona
     * @return \Illuminate\Http\Response
     */
    public function show($idPersona) {
        return $this->successResponse($this->personaService->obtainPersona($idPersona));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $idPersona
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idPersona) {
        return $this->successResponse($this->personaService->editPersona($request->all(), $idPersona));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $idPersona
     * @return \Illuminate\Http\Response
     */
    public function destroy($idPersona) {
        return $this->successResponse($this->personaService->deletePersona($idPersona));
    }
}
