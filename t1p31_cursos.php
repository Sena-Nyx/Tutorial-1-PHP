<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio 31</title>
</head>
<body>
<?php
  $conexion = mysqli_connect("localhost", "root", "", "base1") or die ("Problemas con la conexion");

  if (isset($_REQUEST['codigo'])) 
  {
    $codigocurso = $_REQUEST['codigo'];

    $registros = mysqli_query($conexion, "SELECT codigo, nombrecurso FROM cursos WHERE codigo = $codigocurso") or die ("Problemas con el select: ".mysqli_error($conexion));

    if ($datocurso = mysqli_fetch_array($registros)) 
      {
      
      $alumnos = mysqli_query($conexion, "SELECT nombre, codigocurso FROM alumnos WHERE codigocurso = $codigocurso") or die ("Problemas en el select: " . mysqli_error($conexion));

      $hayalumnos = false;
      
      echo "Alumnos del curso: " . $datocurso['nombrecurso'] . "<br><br>";
      
      while ($alumno = mysqli_fetch_array($alumnos)) 
      {
        echo "- " . $alumno['nombre'] . "<br>";
        $hayalumnos = true;
      }

      if (!$hayalumnos) 
      {
        echo "No hay alumnos inscritos.";
      }

      } 
      
    else 
      {
        echo "Curso no encontrado.";
      }
  } 
  
  else 
  {
    echo "No se proporciono el codigo del curso.";
  }

  mysqli_close($conexion);
?>
</body>
</html>