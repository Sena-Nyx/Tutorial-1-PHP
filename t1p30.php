<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio 30</title>
</head>
<body>
  <?php
    $conexion = mysqli_connect("localhost", "root", "", "base1") or die("Problemas con la conexion");

    $registros = mysqli_query($conexion, "SELECT count(alum.codigo) AS cantidad, nombrecurso, nombre, codigocurso
                                                                    FROM alumnos AS alum
                                                                    INNER JOIN cursos AS cur ON cur.codigo = alum.codigocurso
                                                                    GROUP BY alum.codigocurso") 
                                                                    or die ("Problemas con el select:" .mysqli_error($conexion));
    while ($curso = mysqli_fetch_array($registros))
    {
      echo "Nombre del curso:" . $curso['nombrecurso'] . "<br>";
      echo "Cantidad de inscritos:" . $curso['cantidad'] . "<br>";
      echo "Nombres de los alumnos inscritos: <br>";

    $alumnos = mysqli_query($conexion, "SELECT nombre FROM alumnos WHERE codigocurso = " . $curso['codigocurso']) or die ("Problemas con el select: ".mysqli_error($conexion));

    $hayalumnos = false;
    while ($alumno = mysqli_fetch_array($alumnos))
    {
      echo "- " . $alumno ['nombre'] . "<br>";
      $hayalumnos = true;
    }
    
    if (!$hayalumnos)
    {
      echo "No hay alumnos inscritos <br>";
    }

    echo "<hr>";
    }

    mysqli_close($conexion);
  ?>
</body>
</html>