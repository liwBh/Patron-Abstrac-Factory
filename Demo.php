<?php
session_start();
$_SESSION["Demo"] =  true;

require_once 'FabricaProductor.php';

$fabricaProductor = FabricaProductor::getFabrica("Fabrica1");
$productoA = $fabricaProductor->crearProductoA("ProductoA1");
$Producto1 = $productoA->toString();
echo ($Producto1);

$fabricaProductor = FabricaProductor::getFabrica("Fabrica2");
$productoB = $fabricaProductor->crearProductoB("ProductoB2");
$Producto2 = $productoB->toString();
echo ($Producto2);



?>