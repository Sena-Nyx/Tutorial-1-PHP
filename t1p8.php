<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio 8</title>
</head>
<body>
  <?php
    $multi1 = 1;
    $multi2 = 1;

    echo "Tabla de multiplcar con bucle for: <br>";
    for ($x=1; $x<=10; $x++)
    {
      echo "2 x $x = " . (2*$x) . "<br>";
    }
    
    echo "<br> Tabla de multiplcar con bucle while: <br>";
    while ($multi1 <= 10)
    {
      echo "2 x $multi1 = " . (2*$multi1) . "<br>";
      $multi1++;
    }

    echo "<br> Tabla de multiplcar con bucle dowhile: <br>";

    do {
      echo "2 x $multi2 = " . (2*$multi2) . "<br>";
      $multi2++;
    } while ($multi2 <= 10);

  ?>
</body>
</html>