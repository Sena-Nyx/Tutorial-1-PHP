<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio 11</title>
</head>
<body>
  <?php
    $can_dep = 0;

    if (isset($_REQUEST['futbol']))
    {
      $can_dep += 1;
    }

    if (isset($_REQUEST['basket']))
    {
      $can_dep += 1;
    }

    if (isset($_REQUEST['volley']))
    {
      $can_dep += 1;
    }

    if (isset($_REQUEST['tennis']))
    {
      $can_dep += 1;
    }

    echo "La cantidad de deportes que " . $_REQUEST['nombre'] . " juega son $can_dep"
  ?>
</body>
</html>