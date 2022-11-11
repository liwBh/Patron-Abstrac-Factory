<?php

if( isset($_SESSION["Demo"]) && $_SESSION["Demo"]){
  require_once("./Interface/FabricaAbstracta.php");
  require_once("./Implements/ProductoA1.php");
  require_once("./Implements/ProductoA2.php");
}else{
  require_once("../Interface/FabricaAbstracta.php");
  require_once("../Implements/ProductoA1.php");
  require_once("../Implements/ProductoA2.php");
}


class Fabrica1 implements FabricaAbstracta{

  public function crearProductoA($producto){

    switch ($producto) {
      
      case "ProductoA1":
        return new ProductoA1();
        break;
        
      case "ProductoA2":
        return new ProductoA2();;
        break;

      default:
        return null;
    }
    
  }

  public function crearProductoB($producto){
    return null;
  }


}

?>