<?php

require_once("Business/Logica.php");

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

  <link rel="stylesheet" href="./css/estilos.css">
</head>

<body class="bg-light fondo">
  <h1 class="text-center mt-5">Patron Fabrica Abstracta</h1>

  <div class="container">

    <div class="row justify-content-center mt-5">
      <div class="col-4">
        <form method="POST" action="Business/Logica.php" class="p-5 text-white rounded-3"
          style="background: rgba(0, 0, 0, .7);">

          <div>
            <label for="productos">Lista de productos</label>
            <select name="producto" class="form-select form-select-sm mt-2" id="productos"
              aria-label=".form-select-sm example" required>
              <option value="" selected> -Elija una opción- </option>
              <option value="ProductoA1">Producto A1</option>
              <option value="ProductoA2">Producto A2</option>
              <option value="ProductoB1">Producto B1</option>
              <option value="ProductoB2">Producto B2</option>
            </select>
          </div>

          <div class="text-center mt-3">
            <button type="submit" class="btn btn-light w-50">Crear</button>
          </div>

        </form>

      </div>
    </div>

  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
  </script>
</body>

</html>