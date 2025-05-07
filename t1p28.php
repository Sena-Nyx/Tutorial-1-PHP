<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio 28</title>
</head>
<body>
  <?php
    $conexion = mysqli_connect("localhost", "root", "", "base1") or die("Problemas con la conexión");

    $cursos = mysqli_query($conexion, "SELECT nombrecurso FROM cursos") or die ("Problemas en el select: ".mysqli_error($conexion));

    $conteo = mysqli_query($conexion, "SELECT count(*) AS cantidad_cursos FROM cursos") or die ("Problemas en el select: ".mysqli_error($conexion));

    $cantidad = mysqli_fetch_array($conteo);
    echo "La cantidad de cursos son: $cantidad[cantidad_cursos] <br> <br>";
  
    while ($sele = mysqli_fetch_array($cursos)) 
    {
      echo "Los nombres de todos los cursos son: $sele[nombrecurso] <br>";
    }
  ?>
</body>
</html>