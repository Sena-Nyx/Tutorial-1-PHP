<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio 21</title>
</head>
<body>
  <?php
    $conexion = mysqli_connect("localhost", "root", "", "base1") or die ("Problemas con la conexion");

    $registros = mysqli_query($conexion, "select codigo, nombrecurso from cursos") or die ("Problemas en el select: ".mysqli_error($conexion));

    while ($sele = mysqli_fetch_array($registros))
    {
      echo "codigo: " . $sele['codigo'] . "<br>";
      echo "nombre del curso: " . $sele['nombrecurso'] . "<br>";
      echo "<hr>";
    }

    mysqli_close($conexion);
  ?>
</body>
</html>