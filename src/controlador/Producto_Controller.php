<?php



use Empresa\App\Modelo\Producto;
use Empresa\App\Libs\Controlador;


class Producto_Controller extends Controlador
{
  public function listar()
  {
    $lista = Producto::listar();
    $this->cargarVista("producto/listar", $lista);
  }
  public function nuevo()
  {
    $this->cargarVista("producto/nuevo");
  }
  public function crear()
  {
    try {
      $codigo = $_POST['codigo'];
      $descripcion = $_POST['descripcion'];
      $precio = $_POST['precio'];
      $fecha = $_POST['fecha'];
      $fechaF = $date = DateTime::createFromFormat('Y-m-d', $fecha)->format('d-m-Y');
      $producto = new Producto(null, $codigo, $descripcion, $precio, $fecha);
      $id = $producto->crear();
      $this->cargarVista("producto/crear", $id);
      //code...
    } catch (\Throwable $ex) {
      //throw $th;
      $mensaje = $ex->getMessage();
      $this->cargarVista("producto/error");
    }
  }
}