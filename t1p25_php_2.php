<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio 25</title>
</head>
<body>
  <?php
    $conexion = mysqli_connect("localhost", "root", "", "base1") or die ("Problemas con la conexion");

    mysqli_query($conexion, "update cursos
                              set nombrecurso = '$_REQUEST[nomcurnuevo]'
                              where nombrecurso = '$_REQUEST[nomcurviejo]'") or die ("Problemas en el select ".mysqli_error($conexion));
    echo "El nombre del curso fue modificado con exito";
  ?>

</body>
</html>