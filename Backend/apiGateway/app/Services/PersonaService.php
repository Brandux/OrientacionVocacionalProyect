<?php

namespace App\Services;

use App\Traits\ConsumesExternalService;

class PersonaService
{
    use ConsumesExternalService;

    /**
     * The base uri to be used to consume the authors service
     * @var string
     */
    public $baseUri;

    /**
     * The secret to be used to consume the authors service
     * @var string
     */
    public $secret;

    public function __construct()
    {
        $this->baseUri = config('services.persona.base_uri');
        $this->secret = config('services.persona.secret');
    }

    /**
     * Get the full list of authors from the authors service
     * @return string
     */
    public function obtainPersonas() {
        return $this->performRequest('GET', '/personas');
    }

    /**
     * Create an instance of author using the authors service
     * @return string
     */
    public function createPersona($data) {
        return $this->performRequest('POST', '/personas', $data);
    }

    /**
     * Get a single author from the authors service
     * @return string
     */
    public function obtainPersona($idPersona) {
        return $this->performRequest('GET', "/personas/{$idPersona}");
    }

    /**
     * Edit a single author from the authors service
     * @return string
     */
    public function editPersona($data, $idPersona) {
        return $this->performRequest('PUT', "/personas/{$idPersona}", $data);
    }

    /**
     * Remove a single author from the authors service
     * @return string
     */
    public function deletePersona($idPersona) {
        return $this->performRequest('DELETE', "/personas/{$idPersona}");
    }
}