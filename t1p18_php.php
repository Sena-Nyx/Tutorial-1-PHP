<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio 18</title>
</head>
<body>
  <?php
    function comparardatos($nombre1, $nombre2, $clave1, $clave2)
    {
      if ($nombre1 !== $nombre2)
      {
        echo "Los nombres no coinciden";
      }

      elseif ($clave1 !== $clave2)
      {
        echo "Las claves no coinciden";
      }

      else {
        echo "Los datos ingresados son correctos ";
      }
    }

    $nombre1 = $_POST['nombre1'];
    $nombre2 = $_POST['nombre2'];
    $clave1 = $_POST['clave1'];
    $clave2 = $_POST['clave2'];

    comparardatos($nombre1, $nombre2, $clave1, $clave2)
  ?>
</body>
</html>