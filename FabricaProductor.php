<?php
require_once("Create/Fabrica1.php");
require_once("Create/Fabrica2.php");

class FabricaProductor{


  public static function getFabrica($tipoFabrica){

    switch ($tipoFabrica) {
      
      case "Fabrica1":
        return new Fabrica1();
        break;
        
      case "Fabrica2":
        return new Fabrica2();
        break;

      default:
        return null;
    }
    
  }

}

?>