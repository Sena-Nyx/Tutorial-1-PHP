<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio 20</title>
</head>
<body>
  <?php
    $conexion = mysqli_connect("localhost", "root", "", "base1") or die ("Problemas con la conexion");

    mysqli_query($conexion, "insert into cursos(codigo, nombrecurso) values ($_REQUEST[codigo], '$_REQUEST[nombrecurso]')") or die ("Problemas en el select".mysqli_error($conexion));
    mysqli_close($conexion);

    echo "El curso fue registrado correctamente";
  ?>
</body>
</html>