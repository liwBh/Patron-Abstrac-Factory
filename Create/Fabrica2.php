<?php

if( isset($_SESSION["Demo"]) && $_SESSION["Demo"]){
  require_once("./Interface/FabricaAbstracta.php");
  require_once("./Implements/ProductoB1.php");
  require_once("./Implements/ProductoB2.php");
}else{
  require_once("../Interface/FabricaAbstracta.php");
  require_once("../Implements/ProductoB1.php");
  require_once("../Implements/ProductoB2.php");
}

class Fabrica2 implements FabricaAbstracta{

  public function crearProductoB($producto){

    switch ($producto) {
      
      case "ProductoB1":
        return new ProductoB1();
        break;
        
      case "ProductoB2":
        return new ProductoB2();
        break;

      default:
        return null;
    }
    
  }

  public function crearProductoA($producto){
    return null; 
  }


}

?>