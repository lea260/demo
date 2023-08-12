<?php

use Empresa\App\Libs\Controlador;


class Index_Controller extends Controlador
{
  public function index()
  {
    //echo "con index m index ";
    $valor = "un valor";
    $this->cargarVista("index/index", $valor);
  }
}