<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>insert alumnos</title>
</head>
<body>
  <?php
    $conexion = mysqli_connect("localhost", "root", "", "base1") or die ("Problemas con la conexion");

    mysqli_query($conexion, "insert into alumnos(nombre, email, codigocurso) values ('$_REQUEST[nombre]', '$_REQUEST[email]', $_REQUEST[codigocurso])") or die ("Problemas en el select".mysqli_error($conexion));
    mysqli_close($conexion);

    echo "El alumno se fue de alta.";
  ?>
</body>
</html>