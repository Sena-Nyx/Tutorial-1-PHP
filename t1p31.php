<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio 31</title>
</head>
<body>
  <?php
    $conexion = mysqli_connect("localhost", "root", "", "base1") or die("Problemas con la conexion");

    $registros = mysqli_query($conexion, "SELECT codigo, nombrecurso FROM cursos") or die ("Problemas en el select: " . mysqli_error($conexion));

    echo "Nombres de los cursos: <br>";

    while ($curso = mysqli_fetch_array($registros)) 
    {
      echo "<a href='t1p31_cursos.php?codigo={$curso['codigo']}'> {$curso['nombrecurso']} </a><br>";
    }

    mysqli_close($conexion);
  ?>
</body>
</html>