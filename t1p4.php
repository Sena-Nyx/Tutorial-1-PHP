<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio 4</title>
</head>
<body>
  <?php
    $num = rand(1,100);
    echo "$num <br>";
    if ($num <= 50)
    {
      echo "El numero es menor o igual a 50";
    }

    else
    {
      echo "El numero es mayor a 50";
    }
  ?>
</body>
</html>