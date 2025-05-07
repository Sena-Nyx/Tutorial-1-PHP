<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio 27</title>
</head>
<body>
  <?php
    $conexion = mysqli_connect("localhost","root","","base1") or die("Problemas con la conexión");
    $registros = mysqli_query($conexion,"SELECT alum.codigo as codigo, nombre, email, codigocurso, nombrecurso
    FROM alumnos AS alum
    INNER JOIN cursos AS cur ON cur.codigo = alum.codigocurso
    WHERE alum.codigo = $_REQUEST[codigo]") 
    or die("Problemas en el select:".mysqli_error($conexion));

    if ($sele = mysqli_fetch_array($registros))
    {
      echo "Codigo: " . $sele['codigo'] . "<br>";
      echo "Nombre: " . $sele['nombre'] . "<br>";
      echo "Email: " . $sele['email'] . "<br>";
      echo "Nombre del curso: " . $sele['nombrecurso'] . "<br>";

      echo "Curso: ";
      switch ($sele['codigocurso']) 
      {
        case 1: echo "PHP";
        break;

        case 2: echo "ASP";
        break;

        case 3: echo "JSP";
        break;
      }
    }

    else
    {
      echo "No existe un alumno con ese codigo";
    }

    mysqli_close($conexion);
  ?>
</body>
</html>