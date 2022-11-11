<?php

if( isset($_SESSION["Demo"]) && $_SESSION["Demo"]){
  require_once("./Interface/ProductoAbstractoA.php");
}else{
  require_once("../Interface/ProductoAbstractoA.php");
}

class ProductoA2 implements ProductoAbstractoA{

  private $codigo;
  private $nombre;
  private $precio;

  public function __construct(){
    $this->codigo = "A002";
    $this->nombre = "ProductoA2";
    $this->precio = 2000  ;
  }

  public function crearProductoA(){
    echo $this->toString();
  }
  

  public function getCodigo()
  {
    return $this->codigo;
  }

  public function getNombre()
  {
    return $this->nombre;
  }

  public function getPrecio()
  {
    return $this->precio;
  }

  public function toString() {
    return "<br>Producto:A2, Codigo->{$this->codigo}, Nombre->{$this->nombre}, Precio->{$this->precio}";
  }


}

?>