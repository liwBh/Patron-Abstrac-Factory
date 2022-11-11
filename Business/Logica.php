<?php  

session_start();

if(isset($_POST["producto"]) && !empty($_POST["producto"])){
  $_SESSION["Demo"] =  false;
  $_SESSION["resultado"]= array( "producto"=>obtenerProducto($_POST["producto"]), "mostrar"=>true);

 header("Location: ../view/producto.php");
 
}else{
  $_SESSION["resultado"]= array( "producto"=>"", "mostrar"=>false);
}


  
function obtenerProducto($tipoProducto){

  switch($tipoProducto){
    
    case "ProductoA1":
      return crearProducto("Fabrica1", "ProductoA1");
      break;
    case "ProductoA2":
      return crearProducto("Fabrica1", "ProductoA2");
      break;
    case "ProductoB1":
      return crearProducto("Fabrica2", "ProductoB1");
      break;
    case "ProductoB2":
      return crearProducto("Fabrica2", "ProductoB2");
      break;
    
  }
}

function crearProducto($tipo, $nombre){
  require_once '../FabricaProductor.php';
  
  $fabricaProductor = FabricaProductor::getFabrica($tipo);
  
  $producto;
  
  if(strpos($nombre, 'A')){
    $producto = $fabricaProductor->crearProductoA($nombre); 
  }else{
    $producto = $fabricaProductor->crearProductoB($nombre); 
  }

 
  return $producto->toString();

}
  

?>