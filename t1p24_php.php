<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio 24</title>
</head>
<body>
  <h2> Borrado de todos los datos de la tabla cursos </h2>
  <?php
      $conexion = mysqli_connect("localhost", "root", "", "base1") or die ("Problemas con la conexion");
  
      $registros = mysqli_query($conexion, "select * from cursos") or die ("Problemas en el select: ".mysqli_error($conexion));
  
      if ($sele = mysqli_fetch_array($registros))
      {
        mysqli_query($conexion, "delete from cursos") or die ("Problemas en el select: ".mysqli_error($conexion));
  
        echo "Se realizo el borrado de todos los cursos";
      }
  
      else 
      {
        echo "La tabla ya esta vacia";
      }
  
      mysqli_close($conexion);
  ?>
</body>
</html>