<?php

// namespace App\Http\Controllers\Config;

// use App\Traits\ApiResponser;
// use Illuminate\Http\Request;
// use App\Services\PersonaService;
// use Illuminate\Http\Response;
// use App\Http\Controllers\Controller;

// use App\Services\OtroService; // otro servicio


// class PersonaController extends Controller
// {
//     use ApiResponser;

//     public $personaService;
//     public $otherService;

//     public function __construct(PersonaService $personaService, OtroService $otherService)
//     {
//         $this->personaService = $personaService;
//         $this->otherService = $otherService;

//     }

//     // Metodo para consultar la existencia de un valor en otro servicio (puente),

   
//     public function store(Request $request)  {

//         $this->authorService->obtainAuthor($request->other_id); // llamamos el id del otro servicio si existe en el otro servicio
//         // si no existe sale error y lo obtiene el handler

//         return $this->successResponse($this->personaService->createPersona($request->all()), Response::HTTP_CREATED);
//     }
// }
