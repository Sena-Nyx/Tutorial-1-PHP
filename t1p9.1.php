<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio 9</title>
</head>
<body>
  <?php
    if ($_REQUEST['nombre'] >= 18)
    {
      echo $_REQUEST['nombre'] . " su edad es " . $_REQUEST['edad'] . " usted es mayor de edad";
    }

    else
    {
      echo $_REQUEST['nombre'] . " su edad es " . $_REQUEST['edad'] . " usted es menor de edad";
    }
  ?>
</body>
</html>