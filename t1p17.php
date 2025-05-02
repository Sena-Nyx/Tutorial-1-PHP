<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio 17</title>
</head>
<body>
  <?php
    $usuarios = array(
      array('clave' => 1, 'nombre' => 'juan'),
      array('clave' => 2, 'nombre' => 'jose'),
      array('clave' => 3, 'nombre' => 'pedro'),
      array('clave' => 4, 'nombre' => 'maria'),
      array('clave' => 5, 'nombre' => 'laura')
    );

    echo "Todo el contenido del vector: <br>";
    for($mu = 0; $mu < count($usuarios); $mu++)
    {
      echo "clave: " . $usuarios[$mu]['clave'] . " Nombre: " . $usuarios[$mu]['nombre'] . "<br>";
    }

    echo "<br> Un componente del vector: <br>";
    foreach ($usuarios as $usuario)
    {
      if ($usuario['clave'] == 1)
      {
        echo "clave: " . $usuario['clave'] . "<br>";
        echo "nombre: " . $usuario['nombre'] . "<br>";
      }
    }
  ?>
</body>
</html>