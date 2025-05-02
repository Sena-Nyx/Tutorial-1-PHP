<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio 23</title>
</head>
<body>
  <?php
    $conexion = mysqli_connect("localhost", "root", "", "base1") or die ("Problemas con la conexion");
    
    $registros = mysqli_query($conexion, "select nombrecurso from cursos where nombrecurso = '$_REQUEST[nombrecurso]'") or die ("Problemas en el select: ".mysqli_error($conexion));

    if ($sele = mysqli_fetch_array($registros))
    {
      mysqli_query($conexion, "delete from cursos where nombrecurso = '$_REQUEST[nombrecurso]'") or die ("Problemas en el select: ".mysqli_error($conexion));

      echo "Se realizo el borrado del curso con dicho nombre";
    }

    else 
    {
      echo "No existe un curso con dicho nombre";
    }

    mysqli_close($conexion);
  ?>
</body>
</html>