<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio 16</title>
</head>
<body>
  <?php
    $agregar = fopen("datos.txt", "r") or die("No se pudo abrir el archivo");

    while (!feof($agregar)) {
      $linea = fgets($agregar);
      echo nl2br($linea);
    }

    fclose($agregar);
  ?>

</body>
</html>