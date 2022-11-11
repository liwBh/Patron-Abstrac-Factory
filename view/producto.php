<?php

session_start();
$mostrar = $_SESSION["resultado"]["mostrar"];
$producto = $_SESSION["resultado"]["producto"];

?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Patron Fabrica Abstracta</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/estilos.css">
</head>

<body class="bg-light fondo">
  <h1 class="text-center mt-5">Patron Fabrica Abstracta</h1>

  <div class="container">

    <div class="row justify-content-center mt-5">
      <div class="col-6">

        <div class="p-5 text-white rounded-3" style="background: rgba(0, 0, 0, .7);">
          <?php  if($mostrar){ 
          echo '<h2 class="text-center">Producto Elejido</h2>
                <p class="text-white">'.
                  $producto.
                '</p>';
          } ?>
        </div>
      </div>

      <div class="text-center mt-3">
        <a href="../index.php" class="btn btn-danger"> &larr; Regresar</a>
      </div>
    </div>

  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
  </script>
</body>

</html>