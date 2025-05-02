<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio 22</title>
</head>
<body>
  <?php
    $conexion = mysqli_connect("localhost", "root", "", "base1") or die ("Problemas con la conexion");

    $registros = mysqli_query($conexion, "select codigo, nombre, email, codigocurso from alumnos where nombre = '$_REQUEST[nombre]'") or die ("Problemas en el select: ".mysqli_error($conexion));

    if ($sele = mysqli_fetch_array($registros))
    {
      echo "Codigo: " . $sele['codigo'] . "<br>";
      echo "Nombre: " . $sele['nombre'] . "<br>";

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
      echo "No existe un alumno con ese nombre";
    }

    mysqli_close($conexion);
  ?>
</body>
</html>