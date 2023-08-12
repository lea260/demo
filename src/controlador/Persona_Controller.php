<?php

use Empresa\App\Modelo\Persona;
use Empresa\App\Libs\Controlador;

class Persona_Controller extends Controlador
{

  public function listar()
  {
    $modelo = new Persona();
    $lista = $modelo->listar();
    $this->cargarVista("persona/listar", $lista);
  }
}