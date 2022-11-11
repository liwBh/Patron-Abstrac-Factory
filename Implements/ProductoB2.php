<?php

if( isset($_SESSION["Demo"]) && $_SESSION["Demo"]){
  require_once("./Interface/ProductoAbstractoB.php");
}else{
  require_once("../Interface/ProductoAbstractoB.php");
}

class ProductoB2 implements ProductoAbstractoB{

  private $codigo;
  private $nombre;
  private $precio;

  public function __construct(){
    $this->codigo = "B002";
    $this->nombre = "ProductoB2";
    $this->precio = 1800  ;
  }
  
  public function crearProductoB(){
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
    return "<br>Producto:B2, Codigo->{$this->codigo}, Nombre->{$this->nombre}, Precio->{$this->precio}";
  }

}

?>